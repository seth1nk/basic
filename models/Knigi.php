<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "knigi".
 *
 * @property int $id
 * @property string $Название
 * @property string $Издательство
 * @property string $Автор
 * @property int $Год
 * @property string $Жанр
 * @property int $Цена
 */
class Knigi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'knigi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Название', 'Издательство', 'Автор', 'Год', 'Жанр', 'Цена'], 'required'],
            [['Год', 'Цена'], 'integer'],
            [['Название', 'Издательство', 'Автор', 'Жанр'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Название' => 'Название',
            'Издательство' => 'Издательство',
            'Автор' => 'Автор',
            'Год' => 'Год',
            'Жанр' => 'Жанр',
            'Цена' => 'Цена',
        ];
    }
}
