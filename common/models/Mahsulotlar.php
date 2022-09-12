<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

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
    public $imageFile;
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
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
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

    public function upload()
    {
        $this->foto=$this->imageFile->baseName .'.' . $this->imageFile->extension;
        if ($this->validate()) {
            $this->imageFile->saveAs(Yii::getAlias('@backend') . '/web/rasmlar/' . $this->imageFile->baseName . '.' . $this->imageFile->extension,false);
            return true;
        } else {
            return false;
        }
    }
}
