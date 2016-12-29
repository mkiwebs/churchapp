<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Service;
use backend\models\Midweek;
use backend\models\ServiceSearch;
use backend\models\MidweekSearch;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => [
                             'logout', 'index',
                             'universitydata','newdiscipledata','workers','disciple','themission','campdata'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        //$this->layout = 'dashboard';
/*     $serviceAttend = Service::find()
                               ->sum('youth')
                               +Service::find()
                               ->sum('kids') +Service::find()
                               ->sum('new_disciples');
     $midWeekAttend = Midweek::find()
                               ->sum('youth')
                               + Midweek::find()
                               ->sum('kids') 
                               + Midweek::find()
                               ->sum('new_disciples');                          
    $newDisciplesAttend = Service::find()
                               ->sum('new_disciples')
                               + Midweek::find()
                               ->sum('new_disciples');*/

      $searchModel = new ServiceSearch();
      $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
      $midWeeksearchModel = new MidweekSearch();
      $midweekDataProvider = $midWeeksearchModel->search(Yii::$app->request->queryParams);
        return $this->render('index',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'midWeeksearchModel'=>$midWeeksearchModel,
            'midweekDataProvider'=>$midweekDataProvider,
            /*'serviceAttend' => $serviceAttend,
            'midWeekAttend'=>$midWeekAttend,
            'newDisciplesAttend' => $newDisciplesAttend,*/
            ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()

    {
        $this->layout = 'login-page';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();

    }

        /**
     * New disciples action.
     *
     * @return string
     */
    public function actionDisciple()
    {
        
        return $this->render('disciple');

    }
            /**
     * New Camp data action.
     *
     * @return string
     */
    public function actionCampdata()
    {

        return $this->render('campdata');

    }

                /**
     * New New Disciples data action.
     *
     * @return string
     */
    public function actionNewdiscipledata()
    {

        return $this->render('newdiscipledata');

    }

     /**
     * New University data action.
     *
     * @return string
     */
    public function actionUniversitydata()
    {

        return $this->render('universitydata');

    }

     /**
     * New 300 Disciple data action.
     *
     * @return string
     */
    public function actionThemission()
    {
         
     $serviceAttend = Service::find()
                               ->sum('new_disciples');
     $midWeekAttend = Midweek::find()
                               ->sum('youth');                          
    $newAttend = Service::find()
                               ->sum('new_disciples');      
        return $this->render('themission',[
            'serviceAttend' => $serviceAttend,
            'midWeekAttend'=>$midWeekAttend,
            'newAttend ' => $newAttend,
            ]);

    }

    /**
     * Workers data action.
     *
     * @return string
     */
    public function actionWorkers()
    {

        return $this->render('workers');

    }
 

 public function actionStats()
{
$response = array();
// collect all the unique dates
$dates = array();
$models=Service::model()->findAll(array(
'select'=>'date',
'group'=>'date',
'distinct'=>true,
));
foreach($models as $model)
array_push($dates, $model->date);
// why not also format the dates for display?
$response["dates"] = array();
foreach($dates as $date) {
$datetime = new DateTime($date);
array_push($response["dates"], $datetime->format("M jS"));
}
// count the visitors and the visits for each day
$response["visitors"] = array();
$response["visits"] = array();
foreach($dates as $date) {
$visits = 0;
$visitors = Service::model()->findAllByAttributes(array("date"=>$date));
foreach($visitors as $visitor)
$visits += $visitor->visits;
array_push($response["visitors"], count($visitors));
array_push($response["visits"], $visits);
}
echo json_encode($response);
 return $this->render('stats');
}

}