<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use app\models\EntryForm;

class BlogController extends Controller{
    public function actionIndex()
    {
        return $this->render('/blog/blog.html');
    }
}
