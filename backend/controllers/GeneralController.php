<?php

namespace backend\controllers;
/**
 * MidweekController implements the CRUD actions for Midweek model.
 */
class GeneralController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
