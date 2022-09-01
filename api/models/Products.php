<?php
namespace api\models;

class Products extends \common\models\Products
{
    public function fields()
    {
        return [
            'name',
            'description',
            'image'=>function($model)
            {
                return 'backend/web/photos'.$model->photo;
            }


        ];
    }

}