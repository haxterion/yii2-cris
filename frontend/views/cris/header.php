 <?php
 use yii\helpers\Url;
 use frontend\models\User;
 use yii\helpers\ArrayHelper;
 use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
 ?>
<?php
$id = Yii::$app->session->get('__id');
$user = User::findOne(['id' => $id]);
$users = ArrayHelper::toarray($user);
?>
 <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                        <!--Urora-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="<?php echo Url::to(['cris/index']); ?>" class="logo">
                            <img src="urora/images/logo-sm.png" alt="" height="50" class="logo-small" />
                            <img src="urora/images/logo-h-lg.png" alt="" class="logo-large" />
                        </a>

                    </div>
                    <!-- End Logo container-->
                     <div class="menu-extras topbar-custom">
                        
                        <ul class="list-inline float-right mb-0 ">
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="<?php echo Url::to(['cris/index']); ?>" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="ti-microsoft-alt noti-icon"></i>
                                </a>
                            </li>
                            <!--<li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="ti-email noti-icon"></i>
                                </a>
                            </li>-->

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="<?php echo Url::to(['cris/logout']); ?>" role="button" aria-haspopup="false" aria-expanded="false">
                                        <?php
    NavBar::begin();
    echo Nav::widget([
        'items' => [
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['login']]
            ) : (
                '<li>'
                . Html::beginForm(['logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
                                <i class="mdi mdi-exit-to-app noti-icon"></i>
                                </a>
                                <span>Selamat datang <strong><?= $id == '' ? '' : $users ['username']; ?></strong></span>
                                
                            </li>
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link" id="mobileToggle">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>    
                        </ul> 
                        
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu ">
                                <a href="#"><i class="mdi mdi-cart"></i>Sales Force</a>
                                <ul class="submenu">
                                    <li>
                                        <ul>
                                            <li><a href="<?php echo Url::to(['cris/guestbook']); ?>">
                                                Guest Book</a></li>
                                            <li><a href="#">Booking Order (SPK)</a></li>
                                            <li><a href="#">Scheduling</a></li>
                                        </ul>
                                        <li class="has-submenu">
                                                <a href="#">Report</a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo Url::to(['cris/rdriver']); ?>">
                                                Driver</a></li>
                                                <li><a href="<?php echo Url::to(['cris/rvehicle']); ?>">Vehicle</a></li>
                                                <li><a href="#">Sales</a></li>
                                                <li><a href="#">Customer</a></li>
                                            </ul>
                                        </li>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-cart-outline"></i>Purchasing</a></li>
                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-store"></i>Ware House</a></li>
                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-wrench"></i>Maintenance</a></li>
                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-calculator"></i>Accounting</a></li>
                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-square-inc-cash"></i>Finance</a></li>

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-server"></i>Master</a>
                                <ul class="submenu">
                                    <li>
                                        <ul>
                                            <li><a href="<?php echo Url::to(['driver/index']); ?>">
                                                Driver</a></li>
                                            <li><a href="<?php echo Url::to(['vehicle/index']); ?>">
                                                Vehicle</a></li>
                                            <li><a href="#">Role</a></li>
                                            <li><a href="#">Group Role</a></li>
                                        </ul>
                                        <li class="has-submenu">
                                                <a href="#">Account</a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo Url::to(['cris/login']); ?>">Login</a></li>
                                                <li><a href="#">Register</a></li>
                                            </ul>
                                        </li>
                                    </li>
                                </ul>
                            </li>
                        </ul><!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
