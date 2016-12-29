<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "church_info".
 *
 * @property integer $church_id
 * @property string $church_name
 * @property string $church_address
 * @property string $church_pastor
 * @property string $church_service_time
 * @property integer $church_renshu
 * @property string $church_contact_info
 * @property string $church_vision
 * @property string $church_mission
 */
class Church extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'church_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['church_name', 'church_address', 'church_pastor', 'church_service_time', 'church_renshu', 'church_contact_info', 'church_vision', 'church_mission'], 'required'],
            [['church_service_time'], 'safe'],
            [['church_renshu'], 'integer'],
            [['church_contact_info'], 'string'],
            [['church_name', 'church_address', 'church_pastor', 'church_vision', 'church_mission'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'church_id' => 'Church ID',
            'church_name' => 'Church Name',
            'church_address' => 'Church Address',
            'church_pastor' => 'Church Pastor',
            'church_service_time' =>'Church Service Time',
            'church_renshu' => 'Church Renshu',
            'church_contact_info' => 'Church Contact Info',
            'church_vision' => 'Church Vision',
            'church_mission' => 'Church Mission',
        ];
    }
}
