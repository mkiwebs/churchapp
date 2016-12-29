<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Midweek;

/**
 * MidweekSearch represents the model behind the search form about `backend\models\Midweek`.
 */
class MidweekSearch extends Midweek
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['midweek_id', 'church_id', 'university', 'youth', 'sundayschool', 'new_disciples', 'kids', 'experts'], 'integer'],
            [['date'], 'safe'],
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
        $query = Midweek::find();

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
            'midweek_id' => $this->midweek_id,
            'date' => $this->date,
            'church_id' => $this->church_id,
            'university' => $this->university,
            'youth' => $this->youth,
            'sundayschool' => $this->sundayschool,
            'new_disciples' => $this->new_disciples,
            'kids' => $this->kids,
            'experts' => $this->experts,
        ]);

        return $dataProvider;
    }
}
