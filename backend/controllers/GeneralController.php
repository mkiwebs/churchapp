<?php

namespace backend\controllers;

class GeneralController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
