<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
class LoginController extends Controller{
    public function actionIndex(){
        return $this ->renderpartial('/login/login.html');
    }

}
