<?php
namespace api\models;

use yii\helpers\Url;

class Products extends \common\models\Products
{
    public function fields()
    {
        return [
            'id',
            'name',
            'image'=>function($model)
            {
                return 'https:/admin.alhon.uz/photos/'.$model->photo;
            }
        ];
    }

}