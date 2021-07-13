<?php

namespace app\modules\adm\controllers;

use app\modules\adm\models\Author;
use yii\rest\ActiveController;

/**
 * Default controller for the `adm` module
 */
class AuthorController extends ActiveController
{
    public $modelClass = Author::class;
}
