<?php

namespace backend\controllers;

class TrainingController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
