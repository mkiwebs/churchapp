<?php
namespace common\components;
 
use yii\base\BootstrapInterface;
use yii\web\Cookie;
use yii\base\Exception;
 
class LanguageSelector implements BootstrapInterface
{
    public $supportedLanguages = [];
 
    public function bootstrap($app)
    {
        $cookies = $app->response->cookies;
        $languageNew = $app->request->get('language');
 
 
        if($languageNew !== null)
        {
            if (!in_array($languageNew, $this->supportedLanguages)) {
                throw new Exception('Language  selection is invalid');
            }
 
                $cookies->add(new Cookie([
                    'name' => 'language',
                    'value' => $languageNew,
                    'expire' => time() + 60 * 60 * 24 * 30, // 30 days
                ]));
                $app->language = $languageNew;
 
        }
        else
        {
 
            $preferedLanguage = isset($app->request->cookies['language']) ? (string) $app->request->cookies['language'] : null;
 
            if(empty($preferedLanguage))
            {
                $preferedLanguage = $app->request->getPreferredLanguage($this->supportedLanguages);
            }
            $app->language = $preferedLanguage;
        }
    }
}
