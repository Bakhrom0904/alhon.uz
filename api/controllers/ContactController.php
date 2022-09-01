<?php

namespace api\controllers;

use yii\rest\ActiveController;
use api\controllers\UniversalController;

class ContactController  extends UniversalController
{
    public $modelClass = 'common\models\Contact';
}