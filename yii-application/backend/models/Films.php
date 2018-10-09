<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Films".
 *
 * @property string $Film_Name
 * @property string $Film_Year
 * @property string $Film_Id
 * @property string $Film_Author
 *
 * @property Authors $filmAuthor
 * @property FilmsGenres[] $filmsGenres
 */
class Films extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Films';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Film_Id', 'Film_Author'], 'required'],
            [['Film_Name', 'Film_Year', 'Film_Id', 'Film_Author'], 'string', 'max' => 255],
            [['Film_Id'], 'unique'],
            [['Film_Author'], 'exist', 'skipOnError' => true, 'targetClass' => Authors::className(), 'targetAttribute' => ['Film_Author' => 'Authors_Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Film_Name' => 'Film  Name',
            'Film_Year' => 'Film  Year',
            'Film_Id' => 'Film  ID',
            'Film_Author' => 'Film  Author',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmAuthor()
    {
        return $this->hasOne(Authors::className(), ['Authors_Id' => 'Film_Author']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmsGenres()
    {
        return $this->hasMany(FilmsGenres::className(), ['Film_Id' => 'Film_Id']);
    }
}
