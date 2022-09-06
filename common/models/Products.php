<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $cost
 * @property string|null $photo
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $imageFile;

    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['name', 'cost', 'photo'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'cost' => 'Cost',
            'photo' => 'Photo',
        ];
    }

    public function upload()
    {
        $this->photo=$this->imageFile->baseName .'.' . $this->imageFile->extension;
        if ($this->validate()) {
            $this->imageFile->saveAs(Yii::getAlias('@backend') . '/web/photos/' . $this->imageFile->baseName . '.' . $this->imageFile->extension,false);
            return true;
        } else {
            return false;
        }
    }
}
