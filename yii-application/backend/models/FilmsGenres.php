<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "FilmsGenres".
 *
 * @property string $Film_Id
 * @property string $Genre_Id
 *
 * @property Films $film
 * @property Genres $genre
 */
class FilmsGenres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'FilmsGenres';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Film_Id', 'Genre_Id'], 'required'],
            [['Film_Id', 'Genre_Id'], 'string', 'max' => 255],
            [['Film_Id', 'Genre_Id'], 'unique', 'targetAttribute' => ['Film_Id', 'Genre_Id']],
            [['Film_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Films::className(), 'targetAttribute' => ['Film_Id' => 'Film_Id']],
            [['Genre_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Genres::className(), 'targetAttribute' => ['Genre_Id' => 'Genre_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Film_Id' => 'Film  ID',
            'Genre_Id' => 'Genre  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilm()
    {
        return $this->hasOne(Films::className(), ['Film_Id' => 'Film_Id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genres::className(), ['Genre_id' => 'Genre_Id']);
    }
}
