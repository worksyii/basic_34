<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => Yii::$app->homeUrl],
            ['label' => 'About', 'url' => ['/site/about']],
	        ['label' => 'Register', 'url' => ['/site/signup']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
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


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<!--
<footer class="footer">
    <div class="container">
<p class="pull-left">&copy; Tehno Restart <?/*= date('Y') */?></p>

<p class="pull-right"><?/*= Yii::powered() */?></p>
</div>
</footer>
    -->
<!-- begin:footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5>Information</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#">About Us</a>                    </li>
                    <li>
                        <a href="#">Delivery Information</a>                    </li>
                    <li>
                        <a href="#">Privacy Policy</a>                    </li>
                    <li>
                        <a href="#">Terms &amp; Conditions</a>                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5> Customer Service </h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#">Contact Us</a>                    </li>
                    <li>
                        <a type="button" class="send-newsletter" href="#" data-toggle="modal" data-target="#sendNewsletterModal">Join the newsletter</a>                    </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5> My Account </h5>
                <ul class="list-unstyled">
                    <li> <a href="#">My Account</a> </li>
                    <li> <a href="#">Order History</a> </li>
                    <li> <a href="#">Shopping Cart</a> </li>
                    <li> <a href="#">Checkout</a> </li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5> Social </h5>
               <!-- <p>
                    <a href="#"><i class="fa fa-twitter"></i></a> &nbsp;
                    <a href="#"><i class="fa fa-facebook"></i></a> &nbsp;
                    <a href="#"><i class="fa fa-rss"></i></a>
                </p>-->
            </div>

        <!--</div>
        <hr>
        <p></p><p>Copyright © 2020 Default Store. All Rights Reserved.
            Powered by <a href="#"><?= Yii::powered()?></a>.</p><p></p>
    </div>-->

</footer>
<!-- end:footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
