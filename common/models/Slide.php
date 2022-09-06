<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "slide".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $photo
 */
class Slide extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $imageFile;

    public static function tableName()
    {
        return 'slide';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'photo'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'photo' => Yii::t('app', 'Photo'),
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
