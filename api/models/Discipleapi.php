<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%discbasic_info}}".
 *
 * @property integer $disc_ID
 * @property string $full_name
 * @property string $id_number
 * @property string $disc_username
 * @property string $disc_password
 * @property integer $disc_age
 * @property string $disc_phone
 * @property integer $church_id
 * @property string $disc_ruhui_shijian
 * @property string $disc_gender
 * @property string $home_address
 * @property string $disc_profile_photo_url
 * @property string $disc_email
 * @property string $disc_weixin
 * @property string $disc_zhouzhong
 * @property string $disc_jieshou_date
 * @property integer $disc_type
 * @property string $disc_zhiye
 * @property integer $disc_jieshaoren
 * @property string $disc_jiedai_yuanyin
 * @property string $disc_jiedai_didian
 * @property string $disc_birthday
 * @property integer $disc_jianhuren
 * @property string $disc_tribe
 * @property integer $marriage_status
 * @property string $disc_vision
 * @property string $disc_baptism_date
 * @property integer $disc_gelou
 * @property string $disc_work_place
 */
class Discipleapi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%discbasic_info}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'id_number', 'disc_username',  'disc_gender', 'disc_password', 'disc_age', 'disc_phone', 'church_id', 'disc_ruhui_shijian','home_address', 'disc_profile_photo_url', 'disc_email', 'disc_weixin', 'disc_zhouzhong', 'disc_jieshou_date', 'disc_type', 'disc_zhiye', 'disc_jieshaoren', 'disc_jiedai_yuanyin', 'disc_jiedai_didian', 'disc_birthday', 'disc_jianhuren', 'disc_tribe', 'marriage_status', 'disc_vision', 'disc_baptism_date', 'disc_gelou', 'disc_work_place'], 'required'],
            [['disc_age', 'church_id', 'disc_type', 'disc_jianhuren', 'disc_gender', 'marriage_status', 'disc_gelou'], 'integer'],
            [['disc_ruhui_shijian', 'disc_jieshou_date', 'disc_birthday', 'disc_baptism_date'], 'safe'],
            [['disc_jiedai_yuanyin', 'disc_vision'], 'string'],
            [['full_name', 'disc_password'], 'string', 'max' => 100],
            [['id_number', 'disc_username'], 'string', 'max' => 30],
            [['disc_phone'], 'string', 'max' => 15],
             [['disc_jieshaoren'], 'string', 'max' => 255],
            [['home_address', 'disc_profile_photo_url', 'disc_email', 'disc_weixin', 'disc_zhouzhong', 'disc_zhiye', 'disc_jiedai_didian', 'disc_tribe', 'disc_work_place'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'disc_ID' =>'Disciple  ID',
            'full_name' =>'Full Name',
            'id_number' =>'Id Number',
            'disc_username' =>'Username',
            'disc_password' =>'Password',
            'disc_age' =>'Age',
            'disc_phone' =>'Phone',
            'church_id' =>'Church name',
            'disc_ruhui_shijian' =>'Join date',
            'disc_gender' =>'Gender',
            'home_address' =>'Home Address',
            'disc_profile_photo_url' =>'Profile Photo',
            'disc_email' =>'Email',
            'disc_weixin' =>'Wechat',
            'disc_zhouzhong' =>'Midweek Service',
            'disc_jieshou_date' =>'Acceptance Date',
            'disc_type' =>'Type',
            'disc_zhiye' =>'Disc Zhiye',
            'disc_jieshaoren' =>'Disc Jieshaoren',
            'disc_jiedai_yuanyin' =>'Disc Jiedai Yuanyin',
            'disc_jiedai_didian' =>'Disc Jiedai Didian',
            'disc_birthday' =>'Birthday',
            'disc_jianhuren' =>'Disc Jianhuren',
            'disc_tribe' =>'Tribe',
            'marriage_status' =>'Marriage Status',
            'disc_vision' =>'Vision',
            'disc_baptism_date' =>'Baptism Date',
            'disc_gelou' =>'Disc Gelou',
            'disc_work_place' =>'Work Place',
        ];
    }

        public function getChurch()
    {
        return  $this->hasOne(Church::className(),['church_id' => 'church_id']);
    }
}
