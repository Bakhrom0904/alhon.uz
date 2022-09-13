<?php
namespace api\models;

use yii\helpers\Url;

class Slide extends \common\models\Slide
{
    public function fields()
    {
        return [
            'id',
            'title',
            'image'=>function($model)
            {
                return 'https://admin.alhon.uz/photos/'.$model->photo;
            }

        ];
    }

}