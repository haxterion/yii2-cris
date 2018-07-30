<?php
use yii\helpers\Html;
use frontend\models\User;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */

$id = Yii::$app->session->get('__id');
$user = User::findOne(['id' => $id]);
$users = ArrayHelper::toarray($user);
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= $id == '' ? '' : $users ['username']; ?></strong></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    //['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    //['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    //['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    [
                        'label' => 'Master Data',
                        'icon' => 'list',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Vehicle', 'icon' => 'car', 'url' => ['/vehicle/index'],],
                            ['label' => 'Driver', 'icon' => 'male', 'url' => ['/driver/index'],],
                            // ['label' => 'Record Guestbook', 'icon' => 'archive', 'url' => ['/recordguestbook/index'],],
                            ['label' => 'Packet', 'icon' => 'briefcase', 'url' => ['/packet/index'],],
                        ],
                    ],

                            ['label' => 'Guest Book', 'icon' => 'address-book', 'url' => ['/guestbook/index'],],
                            ['label' => 'Booking Order', 'icon' => 'book', 'url' => ['/booking-order/index'],],
                        [
                                'label' => 'Role',
                                'icon' => 'list', 
                                'url' => '#',
                                'items' => [
                                    [
                                        'label' => 'Admin', 
                                        'icon' => 'male', 
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Route', 'icon' => 'male', 'url' => ['/admin/route'],],
                                            ['label' => 'Role', 'icon' => 'th', 'url' => ['/admin/role'],],
                                            ['label' => 'Assignment', 'icon' => 'car', 'url' => ['/admin/assignment'],],
                                            ['label' => 'Permission', 'icon' => 'align-justify', 'url' => ['/admin/permission'],],
                                            ['label' => 'Menu', 'icon' => 'user', 'url' => ['/admin/menu'],],
                                        ],
                                    ],
                                    ['label' => 'Operator', 'icon' => 'male', 'url' => ['/operator/'],],
                                    ['label' => 'Casier', 'icon' => 'car', 'url' => ['/casier/'],],
                                    ['label' => 'Bengkel', 'icon' => 'align-justify', 'url' => ['/bengkel/'],],
                                    ['label' => 'Driver', 'icon' => 'th', 'url' => ['/driver/'],],
                                    ['label' => 'Keuangan', 'icon' => 'user', 'url' => ['/keuangan/'],],
                                 ],
                            ],
                            ['label' => 'Grup Role', 'icon' => 'th', 'url' => ['/debug'],],
                            ['label' => 'Employees', 'icon' => 'user', 'url' => ['/admin/user'],],
                ],
            ]
        ) ?>

    </section>

</aside>