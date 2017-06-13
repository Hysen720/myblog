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
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title>shadow的博客管理后台</title>

    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="sources/assets/css/fonts/linecons/css/linecons.css">
    <link rel="stylesheet" href="sources/assets/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="sources/assets/css/bootstrap.css">
    <link rel="stylesheet" href="sources/assets/css/xenon-core.css">
    <link rel="stylesheet" href="sources/assets/css/xenon-forms.css">
    <link rel="stylesheet" href="sources/assets/css/xenon-components.css">
    <link rel="stylesheet" href="sources/assets/css/xenon-skins.css">
    <link rel="stylesheet" href="sources/assets/css/custom.css">
    <script src="sources/assets/js/jquery-1.11.1.min.js"></script>
</head>
<body class="page-body">
    <div class="settings-pane">
            
        <a href="#" data-toggle="settings-pane" data-animate="true">
            &times;
        </a>
        
        <div class="settings-pane-inner">
            
            <div class="row">
                
                <div class="col-md-4">
                    
                    <div class="user-info">
                        
                        <div class="user-image">
                            <a href="extra-profile.html">
                                <img src='assets/images/user-2.png' class="img-responsive img-circle" />
                            </a>
                        </div>
                        
                        <div class="user-details">
                            
                            <h3>
                                <a href="extra-profile.html">John Smith</a>
                                
                                <!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
                                <span class="user-status is-online"></span>
                            </h3>
                            
                            <p class="user-title">Web Developer</p>
                            
                            <div class="user-links">
                                <a href="extra-profile.html" class="btn btn-primary">Edit Profile</a>
                                <a href="extra-profile.html" class="btn btn-success">Upgrade</a>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
                <div class="col-md-8 link-blocks-env">
                    
                    <div class="links-block left-sep">
                        <h4>
                            <span>Notifications</span>
                        </h4>
                        
                        <ul class="list-unstyled">
                            <li>
                                <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1" />
                                <label for="sp-chk1">Messages</label>
                            </li>
                            <li>
                                <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
                                <label for="sp-chk2">Events</label>
                            </li>
                            <li>
                                <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
                                <label for="sp-chk3">Updates</label>
                            </li>
                            <li>
                                <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4" />
                                <label for="sp-chk4">Server Uptime</label>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="links-block left-sep">
                        <h4>
                            <a href="#">
                                <span>Help Desk</span>
                            </a>
                        </h4>
                        
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <i class="fa-angle-right"></i>
                                    Support Center
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-angle-right"></i>
                                    Submit a Ticket
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-angle-right"></i>
                                    Domains Protocol
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-angle-right"></i>
                                    Terms of Service
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                
            </div>
        
        </div>    
    </div>
    <div class="page-container">
        <div class="sidebar-menu toggle-others fixed">
            
            <div class="sidebar-menu-inner">    
                
                <header class="logo-env">
                    
                    <!-- logo -->
                    <div class="logo">
                        <a href="dashboard-1.html" class="logo-expanded">
                            <img src='assets/images/logo@2x.png' width="80" alt="" />
                        </a>
                        
                        <a href="dashboard-1.html" class="logo-collapsed">
                            <img src='images/logo-collapsed@2x.png' width="40" alt="" />
                        </a>
                    </div>
                    
                    <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
                    <div class="mobile-menu-toggle visible-xs">
                        <a href="#" data-toggle="user-info-menu">
                            <i class="fa-bell-o"></i>
                            <span class="badge badge-success">7</span>
                        </a>
                        
                        <a href="#" data-toggle="mobile-menu">
                            <i class="fa-bars"></i>
                        </a>
                    </div>
                    
                    <!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
                    <div class="settings-icon">
                        <a href="#" data-toggle="settings-pane" data-animate="true">
                            <i class="linecons-cog"></i>
                        </a>
                    </div>
                    
                                
                </header>
                        
                
                        
                <ul id="main-menu" class="main-menu">
                    <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                    <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                    <li>
                        <a href="dashboard-1.html">
                            <i class="linecons-cog"></i>
                            <span class="title">主页</span>
                        </a>
                        <ul>
                            <li>
                                <a href="home-1.html">
                                    <span class="title">主页</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    </ul>
                </div>      
        </div>  
        <div class="main-content">
            <?= $content ?>
        </div>          
    </div>
    <!-- Bottom Scripts -->
    <script src="sources/assets/js/bootstrap.min.js"></script>
    <script src="sources/assets/js/TweenMax.min.js"></script>
    <script src="sources/assets/js/resizeable.js"></script>
    <script src="sources/sources/assets/js/joinable.js"></script>
    <script src="sources/assets/js/xenon-api.js"></script>
    <script src="sources/assets/js/xenon-toggles.js"></script>


    <!-- Imported scripts on this page -->
    <script src="sources/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="sources/assets/js/jvectormap/regions/jquery-jvectormap-world-mill-en.js"></script>
    <script src="sources/assets/js/jvectormap/regions/jquery-jvectormap-it-mill-en.js"></script>


    <!-- JavaScripts initializations and stuff -->
    <script src="sources/assets/js/xenon-custom.js"></script>
</body>
</html>