<?php
namespace api\models;

use yii\helpers\Url;

class Products extends \common\models\Products
{
    public function fields()
    {
        return [
            'name',
            'description',
            'image'=>function($model)
            {
                return Url::base('https') . '/web/photos/'.$model->photo;
            }


        ];
    }

}