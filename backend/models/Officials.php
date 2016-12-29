<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "church_officials".
 *
 * @property integer $official_id
 * @property integer $disc_id
 * @property string $church_post
 * @property string $education
 * @property string $talent
 * @property string $work_desc
 * @property string $vision
 * @property string $family_status
 * @property string $expert_category
 * @property string $department
 * @property string $awards
 */
class Officials extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'church_officials';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['disc_id', 'church_post', 'education', 'talent', 'work_desc', 'vision', 'family_status', 'expert_category', 'department', 'awards'], 'required'],
            [['disc_id'], 'integer'],
            [['education', 'talent', 'work_desc', 'vision', 'awards'], 'string'],
            [['church_post', 'family_status', 'expert_category', 'department'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'official_id' => Yii::t('backend', 'Official ID'),
            'disc_id' => Yii::t('backend', 'Full Name'),
            'church_post' => Yii::t('backend', 'Post'),
            'education' => Yii::t('backend', 'Education'),
            'talent' => Yii::t('backend', 'Talent'),
            'work_desc' => Yii::t('backend', 'Description'),
            'vision' => Yii::t('backend', 'Vision'),
            'family_status' => Yii::t('backend', 'Family Status'),
            'expert_category' => Yii::t('backend', 'Expert Category'),
            'department' => Yii::t('backend', 'Department'),
            'awards' => Yii::t('backend', 'Awards'),
        ];
    }

    //get disciple
        public function getDisciple()
    {
        return  $this->hasOne(Disciple::className(),['disc_id' => 'disc_id']);
    }
}
