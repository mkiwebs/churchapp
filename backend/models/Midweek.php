<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "midweek_service".
 *
 * @property integer $midweek_id
 * @property string $date
 * @property integer $church_id
 * @property integer $university
 * @property integer $youth
 * @property integer $sundayschool
 * @property integer $new_disciples
 * @property integer $kids
 * @property integer $experts
 */
class Midweek extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'midweek_service';
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
            'midweek_id' => Yii::t('backend', 'Midweek ID'),
            'date' => Yii::t('backend', 'Date'),
            'church_id' => Yii::t('backend', 'Church'),
            'university' => Yii::t('backend', 'University'),
            'youth' => Yii::t('backend', 'Youth'),
            'sundayschool' => Yii::t('backend', 'Sundayschool'),
            'new_disciples' => Yii::t('backend', 'New Disciples'),
            'kids' => Yii::t('backend', 'Kids'),
            'experts' => Yii::t('backend', 'Experts'),
        ];
    }

     public function getChurch()
    {
        return  $this->hasOne(Church::className(),['church_id' => 'church_id']);
    }

    
}
