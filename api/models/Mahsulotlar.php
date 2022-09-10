<?php
namespace api\models;

use yii\helpers\Url;

class Mahsulotlar extends \common\models\Mahsulotlar
{
    public function fields()
    {
        return [
            'id',
            'name',
            'image'=>function($model)
            {
                return 'https:/admin.alhon.uz/photos/'.$model->foto;
            }
        ];
    }

}