<?php
namespace app\controllers;
use Yii;
use yii\rest\ActiveController;
use yii\web\Response;
use yii\filters\Cors;
class DiscipleController extends ActiveController
{
   public function behaviors()
{
    return array_merge([
        'cors' => [
            'class' => Cors::className(),
            #special rules for particular action
            'actions' => [
                'index' => [
                    #web-servers which you alllow cross-domain access
                    'Origin' => ['*'],
                    'Access-Control-Request-Method' => ['POST'],
                    'Access-Control-Request-Headers' => ['*'],
                    'Access-Control-Allow-Credentials' => null,
                    'Access-Control-Max-Age' => 86400,
                    'Access-Control-Expose-Headers' => [],
                ]
            ],
            #common rules
            'cors' => [
                'Origin' => [],
                'Access-Control-Request-Method' => [],
                'Access-Control-Request-Headers' => [],
                'Access-Control-Allow-Credentials' => null,
                'Access-Control-Max-Age' => 0,
                'Access-Control-Expose-Headers' => [],
            ]
        ],
    ], parent::behaviors());
}


  public $modelClass = 'app\models\Discipleapi';
  public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'disciple_Info',
    ];
    public function actionIndex()
	{
	    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
	    $county = \app\models\Discipleapi::find()->all();
	        return $county;
	}
}

