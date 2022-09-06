<?php

namespace api\controllers;

use api\controllers\UniversalController;


class ContactController  extends UniversalController
{
    public $modelClass = 'common\models\Contact';

    public function actions()
    {
        $actions=parent::actions();
        unset($actions['create']);
        return $actions;
    }


}