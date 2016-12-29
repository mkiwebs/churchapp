<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "calendar".
 *
 * @property integer $id
 * @property string $event_title
 * @property string $date
 * @property string $event_place
 * @property string $description
 */
class Calendar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'calendar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_title', 'date', 'event_place', 'description'], 'required'],
            [['date'], 'safe'],
            [['description'], 'string'],
            [['event_title', 'event_place'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'event_title' => Yii::t('backend', 'Event Title'),
            'date' => Yii::t('backend', 'Date'),
            'event_place' => Yii::t('backend', 'Event Place'),
            'description' => Yii::t('backend', 'Description'),
        ];
    }
}
