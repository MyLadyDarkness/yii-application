<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * GenresSearch represents the model behind the search form of `app\models\Genres`.
 */
class GenresSearch extends Genres
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Genre_id', 'Genre_Name'], 'safe'],
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
        $query = Genres::find();

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
        $query->andFilterWhere(['like', 'Genre_id', $this->Genre_id])
            ->andFilterWhere(['like', 'Genre_Name', $this->Genre_Name]);

        return $dataProvider;
    }
}
