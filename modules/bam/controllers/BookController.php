<?php

namespace app\modules\bam\controllers;

use app\modules\bam\models\Book;
use Yii;
use yii\rest\ActiveController;

/**
 * Default controller for the `bam` module
 */
class BookController extends ActiveController
{
    public $modelClass = Book::class;
}
