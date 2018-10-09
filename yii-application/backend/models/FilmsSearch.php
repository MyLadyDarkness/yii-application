<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * FilmsSearch represents the model behind the search form of `app\models\Films`.
 */
class FilmsSearch extends Films
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Film_Name', 'Film_Year', 'Film_Id', 'Film_Author'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Films::find();

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
        $query->andFilterWhere(['like', 'Film_Name', $this->Film_Name])
            ->andFilterWhere(['like', 'Film_Year', $this->Film_Year])
            ->andFilterWhere(['like', 'Film_Id', $this->Film_Id])
            ->andFilterWhere(['like', 'Film_Author', $this->Film_Author]);

        return $dataProvider;
    }
}
