<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mahsulotlar".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $foto
 */
class Mahsulotlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahsulotlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'foto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'foto' => 'Foto',
        ];
    }
}
