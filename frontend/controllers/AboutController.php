<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use app\models\EntryForm;

class AboutController extends Controller{
    public function actionIndex()
    {
        return $this->render('/about/about.html');
    }
}
