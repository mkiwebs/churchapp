<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Property;

/**
 * PropertySearch represents the model behind the search form about `backend\models\Property`.
 */
class PropertySearch extends Property
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wuzi_id', 'wuzi_leibie', 'wuzi_status', 'wuzi_guanliyuan'], 'integer'],
            [['wuzi_mingcheng', 'wuzi_xinghao', 'wuzi_gengxin_status'], 'safe'],
            [['wuzi_quantity'], 'number'],
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
        $query = Property::find();

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
            'wuzi_id' => $this->wuzi_id,
            'wuzi_leibie' => $this->wuzi_leibie,
            'wuzi_status' => $this->wuzi_status,
            'wuzi_quantity' => $this->wuzi_quantity,
            'wuzi_guanliyuan' => $this->wuzi_guanliyuan,
        ]);

        $query->andFilterWhere(['like', 'wuzi_mingcheng', $this->wuzi_mingcheng])
            ->andFilterWhere(['like', 'wuzi_xinghao', $this->wuzi_xinghao])
            ->andFilterWhere(['like', 'wuzi_gengxin_status', $this->wuzi_gengxin_status]);

        return $dataProvider;
    }
}
