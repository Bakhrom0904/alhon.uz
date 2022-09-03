<?php

namespace api\controllers;

use yii\rest\ActiveController;
use api\controllers\UniversalController;
use yii\data\ActiveDataProvider;

class ContactController  extends ActiveController
{
    public $modelClass = 'common\models\Contact';
}