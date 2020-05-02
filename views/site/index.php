<?php

/* @var $this yii\web\View */

$this->title = 'Tehno Restart';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="en-US">
    <link rel="icon" type="image/ico" href="#/themes/classic/assets/images/favicon.ico">
    <title>Home</title>
    <meta name="csrf-param" content="_frontendCSRF">
    <meta name="csrf-token" content="ckNmYnFHYmo1FVRXBQFbLx1xXzsECRc/KC0NBxYVIFwDDC1bPwshHA==">
    <meta name="description" content="Demo site Description">
    <meta name="keywords" content="Demo site Keyword">
<!--    <link href="./images/bootstrap.min.css" rel="stylesheet">
    <link href="./images/font-awesome.min.css" rel="stylesheet">
    <link href="./images/stylesheet.css" rel="stylesheet">
    <link href="./images/bootstrap-theme.css" rel="stylesheet">
    <link href="./images/css" rel="stylesheet">-->
</head>
<body>
<!--<nav id="top">
    <div class="container">
        <div class="hidden-xs hidden-sm hidden-md pull-left" id="local-options">
            <ul class="list-inline">
                <li class="dropdown"><a class="dropdown-toggle" href="http://demo.whatacart.com/site/default/index#" data-toggle="dropdown"><span>USD</span>
                        <i class="fa fa-caret-down"></i></a><ul id="w0" class="dropdown-menu"><li><a class="currency-selector" href="http://demo.whatacart.com/site/default/index#" data-currency-id="USD" tabindex="-1">USD</a></li>
                        <li><a class="currency-selector" href="http://demo.whatacart.com/site/default/index#" data-currency-id="GBP" tabindex="-1">GBP</a></li></ul></li><li class="dropdown"><a class="dropdown-toggle" href="http://demo.whatacart.com/site/default/index#" data-toggle="dropdown"><i class="fa fa-shopping-basket"></i>
                        <span>Default</span>
                        <i class="fa fa-caret-down"></i></a><ul id="w1" class="dropdown-menu"><li><a class="store-selector" href="http://demo.whatacart.com/site/default/index#" data-store-id="1" tabindex="-1">Default</a></li>
                        <li><a class="store-selector" href="http://demo.whatacart.com/site/default/index#" data-store-id="2" tabindex="-1">Demo</a></li></ul></li>            </ul>
        </div>
        <div id="top-links" class="nav pull-right">
            <ul class="list-inline">
                <li> <strong>Demo will be reset in <span id="w2">02:31:29</span></strong> </li>
                <li class="dropdown">
                    <a href="http://demo.whatacart.com/customer/site/login" title="My Account" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs hidden-sm hidden-md">My Account</span>

                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="http://demo.whatacart.com/customer/site/register">
                                Register                        </a>
                        </li>
                        <li>
                            <a href="http://demo.whatacart.com/customer/site/login">
                                Login                        </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="http://demo.whatacart.com/wishlist/default/view" id="wishlist-total" title="Wish List" class="top-nav-wishlist">
                        <span class="hidden-xs hidden-sm hidden-md">Wish List</span>
                    </a>
                </li>

                <li>
                    <a href="http://demo.whatacart.com/cart/default/view" title="Shopping Cart">
                        <span class="hidden-xs hidden-sm hidden-md">Shopping Cart</span>
                    </a>
                </li>
                <li>
                    <a href="http://demo.whatacart.com/cart/checkout/index" title="Checkout">
                        <span class="hidden-xs hidden-sm hidden-md">Checkout</span>
                    </a>
                </li>

                <li>
                    <a href="http://demo.whatacart.com/catalog/products/site/compare-products" title="Compare">
                        <span class="hidden-xs hidden-sm hidden-md top-nav-compareproduct">Compare</span>
                    </a>
                </li>
            </ul>
        </div>    </div>
</nav>-->
<header>
    <div class="container header-row">
        <div class="row">
            <div class="col-sm-4">
                <div id="logo">
                    <h1><a href="#">Tehno Restart</a></h1>
                </div>
            </div>
            <div class="col-sm-5">
                <form id="navbarsearchformview" class="navbar-search" action="#" method="get">
                    <div id="search" class="input-group">
                        <input type="text" id="navbarsearchform-keyword" class="form-control input-lg" name="keyword" placeholder="Search">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default btn-lg" name="navsearch"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="col-sm-3"><div id="cart" class="btn-group btn-block">
                    <div class="dropdown pull-right">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-shopping-cart"></i>
                            <span id="cart-total">0 Item(s) - $0.00</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><p class="text-center">Your shopping cart is empty!</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <nav id="menu" class="navbar">
        <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
            <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Smartphones</a></li>
                <li><a href="#">Laptops</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="container">
    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="carousel slide hidden-xs" data-ride="carousel" id="carousel-captions">
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#carousel-captions">&nbsp;</li>
                    <li data-slide-to="1" data-target="#carousel-captions" class="">&nbsp;</li>
                    <li data-slide-to="2" data-target="#carousel-captions" class="">&nbsp;</li>
                </ol>

                <div class="carousel-inner" style="">
                    <div class="item active"><img src="./images/MacBookAir.jpg" alt=""></div>

                    <div class="item"><img src="./images/iPhone6.jpg" alt=""></div>

                    <div class="item"><img src="./images/slide4-1140x380.png" alt=""></div>
                </div>
                <a class="left carousel-control" data-slide="prev" href="#"><span class="icon-prev"></span> </a>
                <a class="right carousel-control" data-slide="next" href="#"> <span class="icon-next"></span> </a>
            </div>
            <h3>Latest Products</h3>
            <div class="row">
                <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="#">
                                <img class="img-responsive" src="./images/150_150_MGNjNmZlNDsony-vaio-laptop-shop-in-jaipur.jpg" width="150" height="150" alt="">            </a>
                        </div>
                        <div class="caption">
                            <h4>
                                <a href="#">
                                    Sony Vaio 30"                </a>
                            </h4>
                            <p>
                                This is description for product Sony Vaio 30"            </p>
                            <p class="price"><span class="price-new">$115.50</span></p>
                        </div>
                        <div class="button-group">

                            <input type="hidden" name="quantity" value="1">
                            <button type="button" data-toggle="tooltip" title="" class="add-cart" data-productid="55" data-original-title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="product-wishlist" data-productid="55" name="Add to Wish List" data-original-title="Add to Wish List">
                                <i class="fa fa-heart" id="add-to-wish-list-55"></i>
                            </button>

                            <button type="button" data-toggle="tooltip" title="" class="add-product-compare" data-productid="55" id="Add to Compare-55" data-original-title="Add to Compare">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="#">
                                <img class="img-responsive" src="./images/150_150_ZDY5NmEyMmsony-vaio-eb-2011q1-black-hero-lg.jpg" width="150" height="150" alt="">            </a>
                        </div>
                        <div class="caption">
                            <h4>
                                <a href="#">
                                    Sony Vaio 29"                </a>
                            </h4>
                            <p>
                                This is description for product Sony Vaio 29"            </p>
                            <p class="price"><span class="price-new">$105.00</span></p>
                        </div>
                        <div class="button-group">

                            <input type="hidden" name="quantity" value="1">
                            <button type="button" data-toggle="tooltip" title="" class="add-cart" data-productid="54" data-original-title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="product-wishlist" data-productid="54" name="Add to Wish List" data-original-title="Add to Wish List">
                                <i class="fa fa-heart" id="add-to-wish-list-54"></i>
                            </button>

                            <button type="button" data-toggle="tooltip" title="" class="add-product-compare" data-productid="54" id="Add to Compare-54" data-original-title="Add to Compare">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="#">
                                <img class="img-responsive" src="./images/150_150_ZDY5NmEyMmsony-vaio-laptop-s13126-black-with-laptop-bag.jpg" width="150" height="150" alt="">            </a>
                        </div>
                        <div class="caption">
                            <h4>
                                <a href="#">
                                    Sony Vaio 28"                </a>
                            </h4>
                            <p>
                                This is description for product Sony Vaio 28"            </p>
                            <p class="price"><span class="price-new">$94.50</span></p>
                        </div>
                        <div class="button-group">

                            <input type="hidden" name="quantity" value="1">
                            <button type="button" data-toggle="tooltip" title="" class="add-cart" data-productid="53" data-original-title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="product-wishlist" data-productid="53" name="Add to Wish List" data-original-title="Add to Wish List">
                                <i class="fa fa-heart" id="add-to-wish-list-53"></i>
                            </button>

                            <button type="button" data-toggle="tooltip" title="" class="add-product-compare" data-productid="53" id="Add to Compare-53" data-original-title="Add to Compare">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="#">
                                <img src="./images/150_150_img_not_available.png" width="150" height="150" alt="">            </a>
                        </div>
                        <div class="caption">
                            <h4>
                                <a href="#">
                                    Sony Vaio 27"                </a>
                            </h4>
                            <p>
                                This is description for product Sony Vaio 27"            </p>
                            <p class="price"><span class="price-new">$84.00</span></p>
                        </div>
                        <div class="button-group">

                            <input type="hidden" name="quantity" value="1">
                            <button type="button" data-toggle="tooltip" title="" class="add-cart" data-productid="52" data-original-title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="product-wishlist" data-productid="52" name="Add to Wish List" data-original-title="Add to Wish List">
                                <i class="fa fa-heart" id="add-to-wish-list-52"></i>
                            </button>

                            <button type="button" data-toggle="tooltip" title="" class="add-product-compare" data-productid="52" id="Add to Compare-52" data-original-title="Add to Compare">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                    </div>
                </div><div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="#">
                                <img class="img-responsive" src="./images/150_150_MGNjNmZlNDsony-vaio-laptop-shop-in-jaipur.jpg" width="150" height="150" alt="">            </a>
                        </div>
                        <div class="caption">
                            <h4>
                                <a href="#">
                                    Sony Vaio 26"                </a>
                            </h4>
                            <p>
                                This is description for product Sony Vaio 26"            </p>
                            <p class="price"><span class="price-new">$73.50</span></p>
                        </div>
                        <div class="button-group">

                            <input type="hidden" name="quantity" value="1">
                            <button type="button" data-toggle="tooltip" title="" class="add-cart" data-productid="51" data-original-title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="product-wishlist" data-productid="51" name="Add to Wish List" data-original-title="Add to Wish List">
                                <i class="fa fa-heart" id="add-to-wish-list-51"></i>
                            </button>

                            <button type="button" data-toggle="tooltip" title="" class="add-product-compare" data-productid="51" id="Add to Compare-51" data-original-title="Add to Compare">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                    </div>
                </div><div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="#">
                                <img class="img-responsive" src="./images/150_150_ZDY5NmEyMmsony-vaio-eb-2011q1-black-hero-lg.jpg" width="150" height="150" alt="">            </a>
                        </div>
                        <div class="caption">
                            <h4>
                                <a href="#">
                                    Sony Vaio 25"                </a>
                            </h4>
                            <p>
                                This is description for product Sony Vaio 25"            </p>
                            <p class="price"><span class="price-new">$63.00</span></p>
                        </div>
                        <div class="button-group">

                            <input type="hidden" name="quantity" value="1">
                            <button type="button" data-toggle="tooltip" title="" class="add-cart" data-productid="50" data-original-title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="product-wishlist" data-productid="50" name="Add to Wish List" data-original-title="Add to Wish List">
                                <i class="fa fa-heart" id="add-to-wish-list-50"></i>
                            </button>

                            <button type="button" data-toggle="tooltip" title="" class="add-product-compare" data-productid="50" id="Add to Compare-50" data-original-title="Add to Compare">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                    </div>
                </div><div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="#">
                                <img class="img-responsive" src="./images/150_150_ZDY5NmEyMmsony-vaio-laptop-s13126-black-with-laptop-bag.jpg" width="150" height="150" alt="">            </a>
                        </div>
                        <div class="caption">
                            <h4>
                                <a href="#">
                                    Sony Vaio 24"                </a>
                            </h4>
                            <p>
                                This is description for product Sony Vaio 24"            </p>
                            <p class="price"><span class="price-new">$52.50</span></p>
                        </div>
                        <div class="button-group">

                            <input type="hidden" name="quantity" value="1">
                            <button type="button" data-toggle="tooltip" title="" class="add-cart" data-productid="49" data-original-title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="product-wishlist" data-productid="49" name="Add to Wish List" data-original-title="Add to Wish List">
                                <i class="fa fa-heart" id="add-to-wish-list-49"></i>
                            </button>

                            <button type="button" data-toggle="tooltip" title="" class="add-product-compare" data-productid="49" id="Add to Compare-49" data-original-title="Add to Compare">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                    </div>
                </div><div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image">
                            <a href="#">
                                <img src="./images/150_150_img_not_available.png" width="150" height="150" alt="">            </a>
                        </div>
                        <div class="caption">
                            <h4>
                                <a href="#">
                                    Sony Vaio 23"                </a>
                            </h4>
                            <p>
                                This is description for product Sony Vaio 23"            </p>
                            <p class="price"><span class="price-new">$42.00</span></p>
                        </div>
                        <div class="button-group">

                            <input type="hidden" name="quantity" value="1">
                            <button type="button" data-toggle="tooltip" title="" class="add-cart" data-productid="48" data-original-title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>
                            </button>
                            <button type="button" data-toggle="tooltip" title="" class="product-wishlist" data-productid="48" name="Add to Wish List" data-original-title="Add to Wish List">
                                <i class="fa fa-heart" id="add-to-wish-list-48"></i>
                            </button>

                            <button type="button" data-toggle="tooltip" title="" class="add-product-compare" data-productid="48" id="Add to Compare-48" data-original-title="Add to Compare">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade in" id="sendNewsletterModal" tabindex="-1" role="dialog" aria-labelledby="screenOptionsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="modalclose">×</button>
                <h4 class="modal-title" id="screenOptionsLabel">Subscribe Newsletter</h4>
            </div>
            <div id="newsletterform">
                <form id="sendnewsletterview" class="uiform form-horizontal" action="http://demo.whatacart.com/site/default/index" method="post">
                    <input type="hidden" name="_frontendCSRF" value="ckNmYnFHYmo1FVRXBQFbLx1xXzsECRc/KC0NBxYVIFwDDC1bPwshHA==">            <div class="modal-body with-padding">
                        <!--div class="row"-->
                        <div class="form-group field-newslettercustomers-email required">
                            <label class="control-label col-sm-2  required" for="newslettercustomers-email">Email</label><div class="col-sm-10"><input type="text" id="newslettercustomers-email" class="form-control" name="NewsletterCustomers[email]"><div class="help-block help-block-error "></div></div>
                        </div>                <!--/div-->
                    </div>
                    <div class="modal-footer">
                        <div class="col-sm-offset-4 col-sm-8"><button type="submit" id="newslettersubmit" class="btn btn-success" name="save">Submit</button>
                        </div>            </div>
                </form>            </div>
            <br>
            <div id="newslettersuccessmessage" style="display: none" class="alert alert-success">
                Thank you for subscribing to our newsletter            </div>
        </div>
    </div>
</div>
<!--
<script src="./images/jquery.min.js.descărcare"></script>
<script src="./images/yii.js.descărcare"></script>
<script src="./images/bootstrap.min.js.descărcare"></script>
<script src="./images/application.js.descărcare"></script>
<script src="./images/jquery.countdown.min.js.descărcare"></script>
<script src="./images/yii.validation.js.descărcare"></script>
<script src="./images/yii.activeForm.js.descărcare"></script>
-->
    <script type="text/javascript">
    $('.topnavbar ul > li:has(ul) > a').addClass('dropdown-toggle');
    $('.topnavbar ul > li:has(ul) > a').attr('data-toggle', 'dropdown');
</script>
    <script type="text/javascript">jQuery(document).ready(function () {

        var dataString = '';
        $('body').on('click', '.add-cart', function(){
            var selectedVal              = $(this).data('productid');
            $.ajax({
                url: '/cart/default/add-to-cart',
                type: 'post',
                data: 'product_id=' + selectedVal + '&quantity=1&isDetail=0',
                dataType: 'json',
                success: function(json) {
                    if (json['success']) {
                        $('#cart').html(json['data']);
                        $('html, body').animate({ scrollTop: 0 }, 'slow');
                    }
                }
            });
        })
        $('body').on('click', '.product-compare, .add-product-compare', function(){
            var selectedVal = $(this).data('productid');
            $.ajax({
                url: '/catalog/products/site/add-to-compare',
                type: 'post',
                data: 'productId=' + selectedVal,
                dataType: 'json',
                success: function(json) {
                    if (json['success']) {
                        $('.success').fadeIn('slow');
                        $('.top-nav-compareproduct').html(json['data']);
                        $('html, body').animate({ scrollTop: 0 }, 'slow');
                    }
                }
            });
        })
        $('body').on('click', '.productcompare-remove', function(){
            var selectedVal = $(this).data('productid');
            $.ajax({
                url: '/catalog/products/site/remove',
                type: 'get',
                data: 'product_id=' + selectedVal,
                dataType: 'json',
                success: function(json) {
                    if (json['success']) {
                        $('.success').fadeIn('slow');
                        $('.top-nav-compareproduct').html(json['headerCompareProductListContent']);
                        $.pjax.reload({container:'#compareproductslistview-pjax', 'timeout':2000});
                    }
                }
            });
        })
        $('body').on('click', '.product-wishlist', function(){
            var selectedVal = $(this).data('productid');
            $.ajax({
                url: '/wishlist/default/add-to-wishlist',
                type: 'post',
                data: 'productId=' + selectedVal,
                dataType: 'json',
                success: function(json) {
                    if (json['success']) {
                        $('.success').fadeIn('slow');
                        $('.top-nav-wishlist').html(json['data']);
                        $('html, body').animate({ scrollTop: 0 }, 'slow');
                    }
                }
            });
        })
        $('body').on('click', '.wishlist-remove', function(){
            var selectedVal = $(this).data('productid');
            $.ajax({
                url: '/wishlist/default/remove',
                type: 'post',
                data: 'product_id=' + selectedVal,
                dataType: 'json',
                success: function(json) {
                    if (json['success']) {
                        $('.success').fadeIn('slow');
                        $('.top-nav-wishlist').html(json['headerWishlistContent']);
                        $('#wishlist-full').html(json['content']);
                        //$('.wishlist-product').load(location.href + ' .wishlist-product');
                    }
                }
            });
        })
        $('body').on('click', '.cart-remove', function(e){
            var itemCode    = $(this).data('itemcode');
            $.ajax({
                url: '/cart/default/remove',
                type: 'post',
                data: 'item_code=' + itemCode,
                dataType: 'json',
                success: function(json) {
                    window.location.href = '/site/default/index';
                }
            });
            e.stopImmediatePropagation();
            return false;
        })
        $('body').on('click', '.cart-update', function(e){
            var itemCode = $(this).data('itemcode');
            var qty = $(this).closest('tr').find('.cart-qty').val();
            var obj = $(this);
            $.ajax({
                url: '/cart/default/update',
                type: 'post',
                data: 'item_code=' + itemCode + '&qty=' + qty,
                dataType: 'json',
                success: function(json) {
                    if (json['error']) {
                        var errorContainer = obj.closest('td').find('.input-error').html(json['error']);
                        errorContainer.show();
                    }
                    else if (json['content']) {
                        if($('#shopping-container').length)
                        {
                            $('#shopping-container').html(json['content']);
                        }
                        //Need to update cart at the top
                        $('#cart').html(json['headerCartContent']);
                    }
                }
            });
            e.stopImmediatePropagation();
            return false;
        })
        $(".select2-container").tooltip({
            title: function() {
                return $(this).next().data("hint");
            },
        });
        $('.currency-selector').click(function(){
            var value = $(this).data('currency-id');
            $.ajax({
                'type':'GET',
                'url':'/customer/site/set-currency' + '?currency=' + value,
                'success':function(data)
                {
                    window.location.href = '/site/default/index';
                }
            });
        });
        $('.store-selector').click(function(){
            var value = $(this).data('store-id');
            $.ajax({
                'type':'GET',
                'url':'/customer/site/set-store' + '?id=' + value,
                'success':function(data)
                {
                }
            });
            return false;
        });
        $('.language-selector').click(function(){
            var value = $(this).data('language-id');
            $.ajax({
                'type':'GET',
                'url':'/customer/site/change-language' + '?language=' + value,
                'success':function(data)
                {
                    window.location.href = '/site/default/index';
                }
            });
        });
        jQuery("#w2").countdown("2020-04-17 22:30:50", function(e) {$(this).html(e.strftime("%H:%M:%S"))}).on("finish.countdown", function(){location.reload()})
        $('body').on('click', '#cart > .heading a', function() {
            $('#cart').addClass('active');

            $('body').on('mouseleave', '#cart', function() {
                $(this).removeClass('active');
            });
        });
        $('#sendnewsletterview').on('beforeSubmit',
            function(event, jqXHR, settings)
            {
                var form = $(this);
                if(form.find('.has-error').length) {
                    return false;
                }
                $.ajax({
                    url: '/newsletter/site/send',
                    type: 'post',
                    data: form.serialize(),
                    'beforeSend' : function()
                    {
                        attachButtonLoader(form);
                        $('.alert-newsletter').hide();
                    },
                })
                    .done(function(data, statusText, xhr){
                        $('#newsletterform').hide();
                        $('#newslettersuccessmessage').show();
                        removeButtonLoader(form);
                    });

                return false;
            })
        $('#sendNewsletterModal').on('hidden.bs.modal', function ()
        {
            $(location).attr('href', '/site/default/index');
        })
        jQuery('#sendnewsletterview').yiiActiveForm([{"id":"newslettercustomers-email","name":"email","container":".field-newslettercustomers-email","input":"#newslettercustomers-email","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Email cannot be blank."});yii.validation.email(value, messages, {"pattern":/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/,"fullPattern":/^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/,"allowName":false,"message":"Email is not a valid email address.","enableIDN":false,"skipOnEmpty":1});}}], {"errorSummary":".error-summary.hide"});
    });</script>

</body>
</html>
