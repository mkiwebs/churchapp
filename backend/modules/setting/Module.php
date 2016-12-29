<?php

namespace backend\modules\setting;

use Yii;
/**
 * Setting module definition class
 * @author Amwollo Victor <vamwollo@gmail.com>
 * @since 2.0
 */

class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'backend\modules\setting\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    public function _construct()
    {
        echo "The new app";
    }
}
