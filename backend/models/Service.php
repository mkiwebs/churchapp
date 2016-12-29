<?php

namespace backend\models;

use Yii;
use backend\models\Midweek;
use yii\data\ActiveDataProvider;
/**
 * This is the model class for table "sunday_service".
 *
 * @property integer $service_id
 * @property string $date
 * @property integer $church_id
 * @property integer $university
 * @property integer $youth
 * @property integer $sundayschool
 * @property integer $new_disciples
 * @property integer $kids
 * @property integer $experts
 */
class Service extends \yii\db\ActiveRecord
{

    public $serviceAttendance;
    public $data_series;
    public  $newDisciples;

    /*
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sunday_service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'church_id', 'university', 'youth', 'sundayschool', 'new_disciples', 'kids', 'experts'], 'required'],
            [['date'], 'safe'],
            [['church_id', 'university', 'youth', 'sundayschool', 'new_disciples', 'kids', 'experts'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'service_id' => Yii::t('backend', 'Service ID'),
            'date' => Yii::t('backend', 'Date'),
            'church_id' => Yii::t('backend', 'Church'),
            'university' => Yii::t('backend', 'University'),
            'youth' => Yii::t('backend', 'Youth'),
            'sundayschool' => Yii::t('backend', 'Sunday School'),
            'new_disciples' => Yii::t('backend', 'New Disciples'),
            'kids' => Yii::t('backend', 'Kids'),
            'experts' => Yii::t('backend', 'Experts'),
            'serviceAttendance'=>Yii::t('backend', 'Total'),
        ];
    }

        public function getChurch()
    {
        return  $this->hasOne(Church::className(),['church_id' => 'church_id']);
    }


    public static function rowSql()
    {
      $query = Yii::$app->db->createCommand('SELECT DATE_FORMAT(date, "%m-%Y") 
        AS Month, SUM(youth) AS Youth , 
        SUM(kids) AS Kids,
        SUM(sundayschool) AS Sundayschool,
        SUM(new_disciples) AS NewDisc,
        SUM(experts) AS Experts

        FROM sunday_service GROUP BY DATE_FORMAT(date, "%m-%Y")')
            ->queryAll();

        // add conditions that should always apply here
//print_r(array_values($query));
    print json_encode($query, JSON_NUMERIC_CHECK);        
       return true;      
    }

    public static function countYouth()
    {   
        return  self::find()->sum('kids');
    }

    public static function countAttendance()
    {   
        $attendance = self::find()->sum('kids') + self::find()->sum('youth');
        return $attendance;
    }
    public static function newDisciples()
    {   
        $newDisciples = self::find()->sum('new_disciples')+ Midweek::find()->sum('new_disciples');
        return $newDisciples;
    }

     public static function midweekService()
    {   
        $theMidweek = Midweek::find()->sum('university')+ Midweek::find()->sum('kids');
        return $theMidweek;
    }
    /**
     * @inheritdoc
     *Get the Month name from the $model->date
     */
     public static function getMonth()
    {   
        return $theDate = date("m",strtotime('2016-10-13'));
    }

    public static function dateRange()
    {
      return $theRange = self::find()
      ->where(['between', 'date', "2016-11-6", "2016-11-13" ])
      ->andWhere(['church_id'=> 1])->all();
    }

   /**
     * @inheritdoc
     *Returns the sum of youth with the specified date
    */
    public static function sumRange()
    {
      return $theSum = self::find()
      ->where(['between', 'date', "2016-11-6", "2016-11-15" ])
      ->andWhere(['church_id'=> 1])->sum('youth');
    }

   /**
     * @inheritdoc
     *Returns the sum of youth with the specified date
   */
   
/*    public static function sumbyMonth()
    {
      $db = Yii::$app->db;
      $thisdate= date('m',strtotime('2016-11-13'));
     return $theSum = $db->createCommand("SELECT  FROM sunday_service SUM(youth)  WHERE date = 2016-11-13")->execute();
      return $theSum = self::find()
      ->where(['=', 'date',date("m",strtotime('2016-11-13'))])
      ->andWhere(['church_id'=> 1])->sum('youth');
    }*/

   /**
     * @inheritdoc
     *Returns the sum of  with the specified date
    */
    public static function serviceRange()
    {
      $TotalService = self::find()
      ->where(['between', 'date', "2016-11-6", "2016-11-13" ])
      ->andWhere(['church_id'=> 1])->sum('youth') +self::find()

      ->where(['between', 'date', "2016-11-6", "2016-11-13" ])
      ->andWhere(['church_id'=> 1])->sum('kids')+ self::find()

      ->where(['between', 'date', "2016-11-6", "2016-11-13" ])
      ->andWhere(['church_id'=> 1])->sum('new_disciples')+self::find()

      ->where(['between', 'date', "2016-11-6", "2016-11-13" ])
      ->andWhere(['church_id'=> 1])->sum('university') + self::find()

      ->where(['between', 'date', "2016-11-6", "2016-11-13" ])
      ->andWhere(['church_id'=> 1])->sum('experts') + self::find()

      ->where(['between', 'date', "2016-11-6", "2016-11-13" ])
      ->andWhere(['church_id'=> 1])->sum('sundayschool') ;

      return $TotalService;
    }

   /**
     * @inheritdoc
     *Returns the array data to the highchart
     */
public static function getData(){
    
     $data_series = array(
        array(
        'name'=>'Service',
        'data'=>array(23,25,26),
        ),

        array(
        'name'=>'New Disciples',
        'data'=>array(10,12,13),
        ),

        array(
        'name'=>'Mar',
        'data'=>array(14,15,16),
        )
        );

  return  $data_series;
}
    
    /**
     * @inheritdoc
     *Returns the array data to the highchart
     */
/*    public static function getData(){
    (int)$data1 = array(
    array(
        'name' =>'Youth',
        'data'=>self::getTheYouth(),
        //'data'=>[23,24,5,78],
      ),

   array( 
    'name' => 'New Disciples',
    'data'=>self::getTheNew(), 
    //'data'=>[23,24,5,78],
    ),

 array( 
   'name' => 'Kids',
   'data' =>self::getTheKids(),
   //'data'=>[23,24,5,78],
   ) 
 );
     (int)$data_series=$data1; 

     print_r($data_series);
      return  $data_series;
  //}
}
*/
    public static  function getTheYouth()
    {

       
      $query=Yii::$app->db->createCommand('SELECT DATE_FORMAT(date, "%m-%Y") 
        AS month, SUM(youth) AS youth FROM sunday_service GROUP BY DATE_FORMAT(date, "%m-%Y")')
            ->queryAll();
   // print_r(array_values($query[0]['youth']));
     
    (int)$youth_sum  = array_column($query, 'youth');
    //print json_encode($youth_sum, JSON_NUMERIC_CHECK);
   // print_r($youth_sum);     
       return $youth_sum;      
    }

    public static function getTheKids()
    {
      (int)$Kids_sum = array();
      $query = Yii::$app->db->createCommand('SELECT DATE_FORMAT(date, "%m-%Y") 
        AS Month,  
        SUM(kids) AS Kids FROM sunday_service GROUP BY DATE_FORMAT(date, "%m-%Y")')
            ->queryAll();
    //print_r(array_values($query));
    //print json_encode($query, JSON_NUMERIC_CHECK);   
     $Kids_sum = array_column($query, 'Kids');
    //print_r($Kids_sum);     
       return $Kids_sum;      
    }

      public static function getTheNew()
    {
      
      $query = Yii::$app->db->createCommand('SELECT DATE_FORMAT(date, "%m-%Y") 
        AS Month, SUM(new_disciples) AS NewDisc FROM sunday_service GROUP BY DATE_FORMAT(date, "%m-%Y")')
            ->queryAll();

    //print_r(array_values($query));
    var_dump(json_encode($query, JSON_NUMERIC_CHECK)); 
    $NewDisc_sum = array_column($query, 'NewDisc');
    //print_r($NewDisc_sum);        
       return $NewDisc_sum;      
    }

}
/*Array ( 
  [0] => Array ( [Month] => 08-2016 [Youth] => 223 ) 
  [1] => Array ( [Month] => 09-2016 [Youth] => 823 ) 
  [2] => Array ( [Month] => 10-2016 [Youth] => 223 ) 
  [3] => Array ( [Month] => 11-2016 [Youth] => 44 ) 
  [4] => Array ( [Month] => 12-2016 [Youth] => 264 ) 
  )
Array (
 [0] => Array ( 
  [name] => Youth 
  [data] => Array ([0] => 223 [1] => 823 [2] => 223 [3] => 44 [4] => 264 )
  ) 

 [1] => Array ( 
  [name] => New Disciples 
  [data] => Array ( [0] => 234 [1] => 13 [2] => 13 [3] => 127 [4] => 25 )
   )

 [2] => Array ( 
  [name] => Kids 
  [data] => Array ( [0] => 526 [1] => 26 [2] => 526 [3] => 67 [4] => 99 ) 
  )
 )
Array ( 
  [0] => Array ( [name] => Youth [data] => ["223","823","223","44","264"] ) 
  [1] => Array ( [name] => New Disciples [data] => ["234","13","13","127","25"] )
  [2] => Array ( [name] => Kids [data] => ["526","26","526","67","99"] ) )

Array ( 
  [0] => Array ( [name] => Youth [data] => [223,823,223,44,264] )
  [1] => Array ( [name] => New Disciples [data] => [234,13,13,127,25] )
  [2] => Array ( [name] => Kids [data] => [526,26,526,67,99] ) 
  )*/

/*Array ( 
  [0] => Array ( [name] => Youth [data] => Array ( [0] => 23 [1] => 24 [2] => 5 [3] => 78 ) ) 
  [1] => Array ( [name] => New Disciples [data] => Array ( [0] => 23 [1] => 24 [2] => 5 [3] => 78 ) ) 
  [2] => Array ( [name] => Kids [data] => Array ( [0] => 23 [1] => 24 [2] => 5 [3] => 78 ) ) 
  )*/
/*Array ( 
  [0] => Array ( [name] => Youth [data] => Array ( [0] => 23 [1] => 24 [2] => 5 [3] => 78 ) ) 
  [1] => Array ( [name] => New Disciples [data] => Array ( [0] => 23 [1] => 24 [2] => 5 [3] => 78 ) ) 
  [2] => Array ( [name] => Kids [data] => Array ( [0] => 23 [1] => 24 [2] => 5 [3] => 78 ) ) 
  )
Array ( 
  [0] => Array ( [name] => Youth [data] => Array ( [0] => 223 [1] => 823 [2] => 223 [3] => 44 [4] => 264 ) )
  [1] => Array ( [name] => New Disciples [data] => Array ( [0] => 234 [1] => 13 [2] => 13 [3] => 127 [4] => 25 ) ) 
  [2] => Array ( [name] => Kids [data] => Array ( [0] => 526 [1] => 26 [2] => 526 [3] => 67 [4] => 99 ) ) 
  )*/
