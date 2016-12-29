<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Disciple;

/**
 * DiscipleSearch represents the model behind the search form about `backend\models\Disciple`.
 */
class DiscipleSearch extends Disciple
{  
   /**
     *@inheritdoc
     *@property  $globalSearch
     */
    public $globalRoomSearch;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['disc_ID', 'disc_age', 'disc_type', 'disc_jieshaoren', 'disc_jianhuren', 'marriage_status', 'disc_gelou'], 'integer'],
            [['full_name', 'id_number', 'globalRoomSearch','disc_username', 'disc_password', 'disc_phone', 'disc_ruhui_shijian', 'disc_gender', 'home_address', 'disc_profile_photo_url', 'disc_email', 'disc_weixin', 'disc_zhouzhong', 'disc_jieshou_date', 'disc_zhiye', 'disc_jiedai_yuanyin', 'disc_jiedai_didian', 'disc_birthday', 'disc_tribe', 'disc_vision', 'disc_baptism_date', 'church_id', 'disc_work_place'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Disciple::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        //join the church model
        $query->joinWith('church');
        
        // grid filtering conditions
        $query->andFilterWhere([
            'disc_ID' => $this->disc_ID,
            'disc_age' => $this->disc_age,
            'disc_ruhui_shijian' => $this->disc_ruhui_shijian,
            'disc_jieshou_date' => $this->disc_jieshou_date,
            'disc_type' => $this->disc_type,
            'disc_jieshaoren' => $this->disc_jieshaoren,
            'disc_birthday' => $this->disc_birthday,
            'disc_jianhuren' => $this->disc_jianhuren,
            'marriage_status' => $this->marriage_status,
            'disc_baptism_date' => $this->disc_baptism_date,
            'disc_gelou' => $this->disc_gelou,
        ]);

        $query->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'id_number', $this->id_number])
            ->andFilterWhere(['like', 'disc_username', $this->disc_username])
            ->andFilterWhere(['like', 'disc_password', $this->disc_password])
            ->andFilterWhere(['like', 'disc_phone', $this->disc_phone])
            ->andFilterWhere(['like', 'disc_gender', $this->disc_gender])
            ->andFilterWhere(['like', 'home_address', $this->home_address])
            ->andFilterWhere(['like', 'disc_profile_photo_url', $this->disc_profile_photo_url])
            ->andFilterWhere(['like', 'disc_email', $this->disc_email])
            ->andFilterWhere(['like', 'disc_weixin', $this->disc_weixin])
            ->andFilterWhere(['like', 'disc_zhouzhong', $this->disc_zhouzhong])
            ->andFilterWhere(['like', 'disc_zhiye', $this->disc_zhiye])
            ->andFilterWhere(['like', 'disc_jiedai_yuanyin', $this->disc_jiedai_yuanyin])
            ->andFilterWhere(['like', 'disc_jiedai_didian', $this->disc_jiedai_didian])
            ->andFilterWhere(['like', 'disc_tribe', $this->disc_tribe])
            ->andFilterWhere(['like', 'disc_vision', $this->disc_vision])
            ->andFilterWhere(['like', 'church_info.church_name', $this->church_id])
            ->andFilterWhere(['like', 'disc_work_place', $this->disc_work_place]);

            //For @property $globalRoomSearch
     $query->orFilterWhere(['like', 'full_name', $this->globalRoomSearch])
            ->orFilterWhere(['like', 'disc_username', $this->globalRoomSearch])
            ->orFilterWhere(['like', 'disc_phone', $this->globalRoomSearch])
            ->orFilterWhere(['like', 'church_info.church_name', $this->globalRoomSearch])
            ->orFilterWhere(['like', 'disc_email', $this->globalRoomSearch]); 

        return $dataProvider;
    }
}
