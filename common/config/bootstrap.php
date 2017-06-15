<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('api', dirname(dirname(__DIR__)) . '/api');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');


defined("WEB_DIR") or define("WEB_DIR", str_replace("\\","","http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME'])));
