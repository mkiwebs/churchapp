<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Church;

/**
 * ChurchSearch represents the model behind the search form about `backend\models\Church`.
 */
class ChurchSearch extends Church
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['church_id', 'church_renshu'], 'integer'],
            [['church_name', 'church_address', 'church_pastor', 'church_service_time', 'church_contact_info', 'church_vision', 'church_mission'], 'safe'],
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
        $query = Church::find();

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

        // grid filtering conditions
        $query->andFilterWhere([
            'church_id' => $this->church_id,
            'church_service_time' => $this->church_service_time,
            'church_renshu' => $this->church_renshu,
        ]);

        $query->andFilterWhere(['like', 'church_name', $this->church_name])
            ->andFilterWhere(['like', 'church_address', $this->church_address])
            ->andFilterWhere(['like', 'church_pastor', $this->church_pastor])
            ->andFilterWhere(['like', 'church_contact_info', $this->church_contact_info])
            ->andFilterWhere(['like', 'church_vision', $this->church_vision])
            ->andFilterWhere(['like', 'church_mission', $this->church_mission]);

        return $dataProvider;
    }
}
