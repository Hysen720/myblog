<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginContent('@app/views/layouts/header.php'); ?>
<?php $this->endContent(); ?>
<?php $this->beginContent('@app/views/layouts/common.php'); ?>
<?php $this->endContent(); ?>
<div id="content">    
    <?= $content ?>
</div>
<?php $this->beginContent('@app/views/layouts/footer.php'); ?>
<?php $this->endContent(); ?>