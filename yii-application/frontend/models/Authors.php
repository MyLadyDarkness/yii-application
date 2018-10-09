<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Authors".
 *
 * @property string $Authors_Id
 * @property string $Authors_Name
 *
 * @property Films[] $films
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Authors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Authors_Id'], 'required'],
            [['Authors_Id', 'Authors_Name'], 'string', 'max' => 255],
            [['Authors_Id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Authors_Id' => 'Authors  ID',
            'Authors_Name' => 'Authors  Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilms()
    {
        return $this->hasMany(Films::className(), ['Film_Author' => 'Authors_Id']);
    }
}
