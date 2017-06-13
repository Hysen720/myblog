<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!-- Animate.css -->
    <link rel="stylesheet" href="sources/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="sources/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="sources/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="sources/css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="sources/css/flexslider.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="sources/css/style.css">

    <!-- Modernizr JS -->
    <script src="sources/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="fh5co-loader"></div>
    
    <div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="container-fluid">
            <div class="row">
                <div class="top-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7 text-left menu-1">
                                <ul>
                                    <li class="active"><a href="index.php?r=site/index">幽兰谷</a></li>
                                    <li><a href="index.php?r=blog/index">生活点滴</a></li>
                                    <li class="has-dropdown">
                                        <a href="index.php?r=blog/index">生活写照</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Web Design</a></li>
                                            <li><a href="#">eCommerce</a></li>
                                            <li><a href="#">Branding</a></li>
                                            <li><a href="#">API</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?r=about/index">关于博客</a></li>
                                    <li><a href="index.php?r=contact/index">联系我吧</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-5">
                                <ul class="fh5co-social-icons">
                                    <li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
                                    <li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center menu-2">
                    <div id="fh5co-logo">
                        <h1>
                            <a href="index.html">
                            Paper<span>.</span>
                            <small>Blog Theme</small>
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="body_content">
        <?= $content ?>
    </div>
    <!-- jQuery -->
    <script src="sources/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="sources/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="sources/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="sources/js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="sources/js/jquery.flexslider-min.js"></script>
    <!-- Magnific Popup -->
    <script src="sources/js/jquery.magnific-popup.min.js"></script>
    <script src="sources/js/magnific-popup-options.js"></script>
    <!-- Main -->
    <script src="sources/js/main.js"></script>
</body>
</html>
<?php $this->endPage() ?>
