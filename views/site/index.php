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
    <link rel="icon" type="image/ico" href="#">
    <title>Home</title>
    <meta name="csrf-param" content="_frontendCSRF">
    <meta name="csrf-token" content="ckNmYnFHYmo1FVRXBQFbLx1xXzsECRc/KC0NBxYVIFwDDC1bPwshHA==">
    <meta name="description" content="Demo site Description">
    <meta name="keywords" content="Demo site Keyword">
</head>
<body>
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
        </div>
    </div>
</header>
<div class="container">
    <nav id="menu" class="navbar">
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


                                </a>
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
