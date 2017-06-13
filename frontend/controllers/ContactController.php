<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use app\models\EntryForm;

class ContactController extends Controller{
    public function actionIndex()
    {
        return $this->render('/contact/contact.html');
    }
}
