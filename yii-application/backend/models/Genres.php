<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Genres".
 *
 * @property string $Genre_id
 * @property string $Genre_Name
 *
 * @property FilmsGenres[] $filmsGenres
 */
class Genres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Genres';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Genre_id'], 'required'],
            [['Genre_id', 'Genre_Name'], 'string', 'max' => 255],
            [['Genre_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Genre_id' => 'Genre ID',
            'Genre_Name' => 'Genre  Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmsGenres()
    {
        return $this->hasMany(FilmsGenres::className(), ['Genre_Id' => 'Genre_id']);
    }
}
