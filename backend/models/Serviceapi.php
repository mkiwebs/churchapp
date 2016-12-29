<?php

namespace app\models;

use Yii;

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
class Serviceapi extends \yii\db\ActiveRecord
{
    /**
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
            'service_id' => 'Service ID',
            'date' => 'Date',
            'church_id' => 'Church ID',
            'university' => 'University',
            'youth' => 'Youth',
            'sundayschool' => 'Sundayschool',
            'new_disciples' => 'New Disciples',
            'kids' => 'Kids',
            'experts' => 'Experts',
        ];
    }
}
