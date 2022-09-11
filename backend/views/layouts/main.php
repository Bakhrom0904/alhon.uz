<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin panel</title>
        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
        <!-- Styles -->

        <?php $this->head();?>
    </head>
    <body>
<?php $this->beginBody();?>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="/">
                            <!-- <img src="images/logo.png" alt="" /> --><span>Alhon</span></a></div>
                    <li class="label">Menu</li>
                    <li><a href="<?= Url::to(['mahsulotlar/']) ?>"><i class="ti-calendar"></i>Jahon talabidagi mahsulotlar </a></li>
                    <li><a href="<?= Url::to(['slide/']) ?>"><i class="ti-layout-grid2-alt"></i> Sliyedlar</a></li>
                    <li><a href="<?= Url::to(['products/']) ?>"><i class="ti-calendar"></i> Bizning mahsulotlar </a></li>
                    <li><a href="<?= Url::to(['site/']) ?>"><i class="ti-view-list-alt"></i> Murojatlar </a></li>
<!--                    <li>--><?//= Html::a('Logout', Url::to(['site/logout'])) ?><!--</li>-->
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->
<!--        Navbar menyu start-->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="float-right">
                        <div class="dropdown dib">
                            <a href="<?= Url::to(['user/security']) ?>"><button type="button" class="btn btn-info">Parolni yangilash</button></a>
                        </div>
                        <div class="dropdown dib">
                            <a href="<?= Url::to(['site/logout']) ?>"><button type="button" class="btn btn-dark">Chiqish</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section>
                   <?=$content;?>
                </section>
            </div>
        </div>
    </div>



    <?php $this->endBody();?>
    </body>
</html>
<?php $this->endPage();
