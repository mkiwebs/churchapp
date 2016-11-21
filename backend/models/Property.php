<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "store_keeping".
 *
 * @property integer $wuzi_id
 * @property integer $wuzi_leibie
 * @property string $wuzi_mingcheng
 * @property string $wuzi_xinghao
 * @property integer $wuzi_status
 * @property double $wuzi_quantity
 * @property integer $wuzi_guanliyuan
 * @property string $wuzi_gengxin_status
 */
class Property extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'store_keeping';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wuzi_leibie', 'wuzi_mingcheng', 'wuzi_xinghao', 'wuzi_status', 'wuzi_quantity', 'wuzi_guanliyuan', 'wuzi_gengxin_status'], 'required'],
            [['wuzi_leibie', 'wuzi_status', 'wuzi_guanliyuan'], 'integer'],
            [['wuzi_quantity'], 'number'],
            [['wuzi_gengxin_status'], 'string'],
            [['wuzi_mingcheng', 'wuzi_xinghao'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wuzi_id' => Yii::t('backend', 'Property ID'),
            'wuzi_leibie' => Yii::t('backend', 'Property type'),
            'wuzi_mingcheng' => Yii::t('backend', 'Name'),
            'wuzi_xinghao' => Yii::t('backend', 'Model'),
            'wuzi_status' => Yii::t('backend', 'Status'),
            'wuzi_quantity' => Yii::t('backend', 'Quantity'),
            'wuzi_guanliyuan' => Yii::t('backend', 'Admin'),
            'wuzi_gengxin_status' => Yii::t('backend', 'Renewal Status'),
        ];
    }

            public function getDisciple()
    {
        return  $this->hasOne(Disciple::className(),['disc_id' => 'wuzi_guanliyuan']);
    }
}
