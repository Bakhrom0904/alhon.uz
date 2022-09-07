<?php

namespace api\controllers;

use common\models\Contact;
use Yii;
use yii\rest\ActiveController;


class ContactController  extends ActiveController
{
    public $modelClass = 'common\models\Contact';

}