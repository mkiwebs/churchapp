<?php

namespace backend\controllers;
/**
 * MidweekController implements the CRUD actions for Midweek model.
 */
class SettingsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

}
