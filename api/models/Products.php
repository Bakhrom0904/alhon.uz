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
            'description',
            'image'=>function($model)
            {
                return 'https:/admin.alhon.uz/backend/photos/'.$model->photo;
            }

        ];
    }

}