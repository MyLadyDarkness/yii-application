<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\FilmsGenres;

/**
 * FilmsGenresSearch represents the model behind the search form of `backend\models\FilmsGenres`.
 */
class FilmsGenresSearch extends FilmsGenres
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Film_Id', 'Genre_Id'], 'safe'],
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
        $query = FilmsGenres::find();

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
        $query->andFilterWhere(['like', 'Film_Id', $this->Film_Id])
            ->andFilterWhere(['like', 'Genre_Id', $this->Genre_Id]);

        return $dataProvider;
    }
}
