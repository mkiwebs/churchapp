<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Officials;

/**
 * OfficialsSearch represents the model behind the search form about `backend\models\Officials`.
 */
class OfficialsSearch extends Officials
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['official_id'], 'integer'],
            [['church_post', 'disc_id', 'education', 'talent', 'work_desc', 'vision', 'family_status', 'expert_category', 'department', 'awards'], 'safe'],
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
        $query = Officials::find();

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
        
        //join the disciple model
        $query->joinWith('disciple');
        // grid filtering conditions
        $query->andFilterWhere([
            'official_id' => $this->official_id,
            //'disc_id' => $this->disc_id,
        ]);

        $query->andFilterWhere(['like', 'church_post', $this->church_post])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'talent', $this->talent])
            ->andFilterWhere(['like', 'work_desc', $this->work_desc])
            ->andFilterWhere(['like', 'vision', $this->vision])
            ->andFilterWhere(['like', 'family_status', $this->family_status])
            ->andFilterWhere(['like', 'expert_category', $this->expert_category])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'discbasic_info.full_name', $this->disc_id])
            ->andFilterWhere(['like', 'awards', $this->awards]);


        return $dataProvider;
    }
}
