
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>Pizza Chef</title>
    <meta name="description" content="Pizza Chef">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta property="og:title" content="Pizza Chef">
    <meta property="og:type" content="website">
    <meta property="og:url" content="#">
    <meta property="og:image" content="#">
    <meta property="og:site_name" content="Pizza Chef">
    <link href="/img/favicon.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="/css/colorbox.css">
    <link href="/css/fonts.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/product_slider.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/css/product_tabs.css" media="screen">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery.cycle.js"></script>
</head>
<body>

<div class="wrap">
    <!-- top panel -->
    <div class="navbar navbar-inverse navbar-fixed-top topbar">
        <div class="container">

            <!-- cart -->
            <div id="cart">
                <div class="heading">
                    <a title="Shopping Cart">
                           <span id="cart-total">
                               <i class="fa fa-shopping-cart fa-lg"></i>&nbsp;
                               <span class="hidden-xs">0 item(s) - 0.00 $</span>
                           </span>
                    </a>
                </div>

                <div class="content">
                    <div class="inner">
                        <div class="empty">Your shopping cart is empty!</div>
                    </div>
                </div>
            </div>

            <!-- language -->
            <form action="javascript:void(0);" method="post" enctype="multipart/form-data">
                <div id="language">
                    <span class="name">Language: </span>
                    <img src="img/ru.png" alt="Russian" title="Russian">
                    <img src="img/gb.png" alt="English" title="English">
                    <input type="hidden" name="language_code" value="">
                    <input type="hidden" name="redirect" value="#">
                </div>
            </form>
            <div class="divider"></div>

            <!-- currency -->
            <form action="#" method="post" enctype="multipart/form-data">
                <div id="currency">
                    <span class="name">Currency: </span>
                    <a href="javascript:void(0);" title="Euro">€</a>
                    <a href="javascript:void(0);" title="US Dollar">$</a>
                    <a class="active" href="javascript:void(0);" title="Рубль"><strong>$</strong></a>
                    <input type="hidden" name="currency_code" value="">
                    <input type="hidden" name="redirect" value="javascript:void(0);">
                </div>
            </form>
            <div class="divider"></div>

            <!-- menu -->
            <div id="menu" class="menu-container">
                <button type="button" class="menu-toggle" data-toggle="collapse" data-target="#menu-mobile">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse menu-collapse" id="menu-mobile">
                    <ul class="nav nav-pills">
                        <li><a href="pizza.html">Pizza</a></li>
                        <li>
                            <a href="japan.html">Japan <i class="fa fa-angle-down"></i></a>
                            <div>
                                <div class="arrow"></div>
                                <ul>
                                    <li><a href="rolli.html">Rolls (6)</a></li>
                                    <li><a href="rolli.html">Warm rolls (3)</a></li>
                                    <li><a href="rolli.html">Sushi (5)</a></li>
                                    <li><a href="rolli.html">Spicy-sushi (3)</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="drinks-dostavka.html">Beverages</a></li>
                        <li class="links">
                            <ul>
                                <li>
                                    <a href='javascript:void(0);'>Custom block</a>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#footer">Pages</a></li>
                    </ul>
                </div>
            </div>
            <div class="divider hidden-sm hidden-xs"></div>

        </div>
    </div>
    <!-- //top panel -->

    <!-- header -->
    <div class="header">
        <div class="container">

            <div class="row">
                <div class="col-sm-4">
                    <div class="social hidden-xs">
                        <a href="#" target="_blank" title="Pizza Chef Dribbble">
                            <span class="fa fa-dribbble"></span>
                        </a>
                        <a href="#" target="_blank" title="Pizza Chef Facebook">
                            <span class="fa fa-facebook"></span>
                        </a>
                        <a href="#" target="_blank" title="Pizza Chef Flickr">
                            <span class="fa fa-flickr"></span>
                        </a>
                        <a href="#" target="_blank" title="Pizza Chef Google+">
                            <span class="fa fa-google-plus"></span>
                        </a>
                        <a href="#" target="_blank" title="Pizza Chef Instagram">
                            <span class="fa fa-instagram"></span>
                        </a>
                        <a href="#" target="_blank" title="Pizza Chef LinkedIn">
                            <span class="fa fa-linkedin"></span>
                        </a>
                        <a href="#" target="_blank" title="Pizza Chef Pinterest">
                            <span class="fa fa-pinterest"></span>
                        </a>
                        <a href="#" target="_blank" title="Pizza Chef Tumblr">
                            <span class="fa fa-tumblr"></span>
                        </a>
                        <a href="#" target="_blank" title="Pizza Chef Twitter">
                            <span class="fa fa-twitter"></span>
                        </a>
                        <a href="#" target="_blank" title="Pizza Chef Vimeo">
                            <span class="fa fa-vimeo-square"></span>
                        </a>
                        <a href="#" target="_blank" title="Pizza Chef Vkontakte">
                            <span class="fa fa-vk"></span>
                        </a>
                        <a href="#" target="_blank" title="Pizza Chef YouTube">
                            <span class="fa fa-youtube"></span>
                        </a>
                    </div>

                    <div class="header-left">
                        <div id="address">
                            <p><strong>Hours of operation:</strong></p>
                            <p>mon.-fr. <strong>10:00 - 18:00</strong>, sat.-sun. <strong>9:00 - 19:00</strong></p>
                        </div>
                        <div id="phone"><span>(817)</span> 234-34-34</div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div id="logo">
                        <a href="index.html"><img src="/img/logo_pizza.png" title="Pizza Chef" alt="Pizza Chef"></a>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div id="search">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search" value="">
                            <span class="input-group-btn">
                                    <button class="btn btn-default button-search" type="button"><span class="fa fa-search"></span></button>
                                </span>
                        </div>
                    </div>

                    <div class="header-right">
                        <div id="welcome">
                            Welcome visitor you can <a href="login.html">login</a> or <a href="create-account.html">create an account</a>.
                        </div>

                        <div class="links">
                            <a id="wishlist-total" href="javascript:void(0);">
                                <i class="fa fa-heart-o"></i> Wish List (0)
                            </a><br>
                            <a id="link-cart" href="shopping-cart.html">
                                <i class="fa fa-shopping-cart"></i> Shopping Cart
                            </a><br>
                            <a id="link-checkout" href="checkout.html">
                                <i class="fa fa-credit-card"></i> Checkout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //header -->

    <div id="container" class="content">
        <div class="container">
            <div id="notification"></div>
            <div id="column-right" class="hidden-xs hidden-sm">
                <div class="box">
                    <div class="box-heading">
                        <span>Categories</span>
                    </div>
                    <div class="box-content">
                        <ul class="box-category treemenu">
                            <li><a href="pizza.html" class="active"><span>Pizza (10)</span></a></li>
                            <li><a href="japan.html"><span>Japan (17)</span></a>
                                <ul>
                                    <li><a href="rolli.html"><span>Rolls (6)</span></a></li>
                                    <li><a href="teplie-rolli.html"><span>Warm rolls (3)</span></a></li>
                                    <li><a href="sushi.html"><span>Sushi (5)</span></a></li>
                                    <li><a href="spicy-sushi.html"><span>Spicy-sushi (3)</span></a></li>
                                </ul>
                            </li>
                            <li><a href="drinks-dostavka.html"><span>Beverages (7)</span></a></li>
                        </ul>
                    </div>
                </div>

                <div id="banner0" class="banner clearfix">
                    <div class="item pull-left">
                        <a href="http://conceptlogic.ru/">
                            <img src="/img/data-banners-banner-cl-2-255x382.jpg" alt="E-commerce solutions" title="E-commerce solutions">
                        </a>
                    </div>
                </div>

                <div class="box box-featured">
                    <div class="box-heading">
                        <span>Featured</span>
                    </div>

                    <div class="box-content">
                        <div class="box-product product-grid">
                            <div class="item">
                                <div class="image">
                                    <a href="margarita.html">
                                        <img alt="Margarita" title="Margarita" src="/img/data-pizza-margarita-80x80.jpg">
                                    </a>
                                </div>

                                <div class="caption">
                                    <div class="name">
                                        <a href="margarita.html">Margarita</a>
                                    </div>

                                    <div class="price">
                                        <div>
                                            <span class="price-fixed">270.00 $</span>
                                        </div>
                                    </div>

                                    <div class="cart">
                                        <button class="btn btn-success" type="button" onclick="addToCart(&#39;44&#39;);">
                                            <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                        </button>
                                    </div>

                                    <div class="rating">
                                        <div class="stars" title="Based on 3 reviews.">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="image">
                                    <a href="margarita.html">
                                        <img alt="Diablo" title="Diablo" src="/img/data-pizza-pizza-diablo-80x80.jpg">
                                    </a>
                                </div>

                                <div class="caption">
                                    <div class="name">
                                        <a href="margarita.html">Diablo</a>
                                    </div>

                                    <div class="price">
                                        <div>
                                            <span class="price-fixed">270.00 $</span>
                                        </div>
                                    </div>

                                    <div class="cart">
                                        <button class="btn btn-success" type="button" onclick="addToCart(&#39;6822&#39;);">
                                            <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                        </button>
                                    </div>

                                    <div class="rating">
                                        <div class="stars" title="Based on 1 reviews.">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="image">
                                    <a href="margarita.html">
                                        <img alt="Rolls Philadelphia" title="Rolls Philadelphia" src="/img/data-rolls-rolls-filadelfia-80x80.jpg">
                                    </a>
                                </div>

                                <div class="caption">
                                    <div class="name">
                                        <a href="margarita.html">Rolls Philadelphia</a>
                                    </div>

                                    <div class="price">
                                        <div>
                                            <span class="price-fixed">250.00 $</span>
                                        </div>
                                    </div>

                                    <div class="cart">
                                        <button class="btn btn-success" type="button" onclick="addToCart(&#39;6827&#39;);">
                                            <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="image">
                                    <a href="margarita.html">
                                        <img alt="Sushi with red caviar" title="Sushi with red caviar" src="/img/data-rolls-sushi-ikra-80x80.jpg">
                                    </a>
                                </div>

                                <div class="caption">
                                    <div class="name">
                                        <a href="margarita.html">Sushi with red caviar</a>
                                    </div>

                                    <div class="price">
                                        <div>
                                            <span class="price-fixed">80.00 $</span>
                                        </div>
                                    </div>

                                    <div class="cart">
                                        <button class="btn btn-success" type="button" onclick="addToCart(&#39;6836&#39;);">
                                            <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="content">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="pizza.html">Pizza</a></li>
                    <li><a href="margarita.html">Margarita</a></li>
                </ol>

                <div class="product-info">
                    <div class="row">
                        <div class="col-md-4 popup-gallery">
                            <div class="image">
                                <a href="/img/data-pizza-margarita-640x640.jpg" title="Margarita" class="imagebox">
                                    <img src="/img/data-pizza-margarita-350x350.jpg" title="Margarita" alt="Margarita" id="image">
                                </a>
                            </div>

                            <div class="share" style="margin-top: 30px">
                                <!-- Share Button BEGIN 'share.pluso.ru' -->
                                <script type="text/javascript">(function() {
                                        if (window.pluso)if (typeof window.pluso.start == "function") return;
                                        if (window.ifpluso==undefined) { window.ifpluso = 1;
                                            var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                                            s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                                            s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                                            var h=d[g]('body')[0];
                                            h.appendChild(s);
                                        }})();
                                </script>
                                <div class="pluso" data-background="transparent" data-options="small,square,line,horizontal,nocounter,theme=04" data-services="vkontakte,facebook,twitter,google,odnoklassniki,pinterest,tumblr">
                                    <div class="pluso-010011000101-04"><span class="pluso-wrap" style="background:transparent"><a href="margarita.html" title="ВКонтакте" class="pluso-vkontakte"></a><a href="margarita.html" title="Facebook" class="pluso-facebook"></a><a href="margarita.html" title="Twitter" class="pluso-twitter"></a><a href="margarita.html" title="Google+" class="pluso-google"></a><a href="margarita.html" title="Одноклассники" class="pluso-odnoklassniki"></a><a href="margarita.html" title="Pinterest" class="pluso-pinterest"></a><a href="margarita.html" title="Tumblr" class="pluso-tumblr"></a><a href="http://pluso.ru/" class="pluso-more"></a></span>
                                    </div>
                                </div>
                                <!-- Share Button END -->
                            </div>
                        </div>

                        <div class="col-md-8 product-center clearfix">
                            <h1>{{$product}}</h1>
                            <div class="description">
                                <strong>Product Code:</strong> Маргарита<br>
                                <strong>Availability:</strong> 996
                            </div>
                            <div class="options">
                                <h4>Available Options</h4>
                                <div id="option-237" class="option form-group">
                                    <label>
                                        <span class="required">*</span>Pizza weight:
                                    </label><br>
                                    <label for="option-value-17" class="radio-inline">
                                        <img src="/img/data-options-400g-50x50.png" alt="400 grs"><br>
                                        <input type="radio" name="option[237]" value="17" id="option-value-17">
                                        400 grs
                                    </label>
                                    <label for="option-value-18" class="radio-inline">
                                        <img src="/img/data-options-800g-50x50.png" alt="800 grs +60.00 $"><br>
                                        <input type="radio" name="option[237]" value="18" id="option-value-18">
                                        800 grs
                                        <small>(+60.00 $)</small>
                                    </label>
                                    <label for="option-value-19" class="radio-inline">
                                        <img src="/img/data-options-1000g-50x50.png" alt="1200 grs +180.00 $"><br>
                                        <input type="radio" name="option[237]" value="19" id="option-value-19">
                                        1200 grs
                                        <small>(+180.00 $)</small>
                                    </label>
                                </div>

                                <div id="option-238" class="option form-group">
                                    <label>
                                        Free sauce:
                                    </label><br>

                                    <select name="option[238]">
                                        <option value="0"> --- Please Select --- </option>
                                        <option value="20">cheese</option>
                                        <option value="21">garlic</option>
                                    </select>
                                </div>

                                <div id="option-243" class="option form-group">
                                    <label>
                                        Additional sauce:
                                    </label><br>

                                    <label for="option-value-32" class="checkbox-inline">
                                        <input type="checkbox" name="option[243][]" value="32" id="option-value-32"> Сurry
                                        <small>(+20.00 $)</small>
                                    </label>
                                    <label for="option-value-33" class="checkbox-inline">
                                        <input type="checkbox" name="option[243][]" value="33" id="option-value-33"> Barbecue
                                        <small>(+20.00 $)</small>
                                    </label>
                                </div>

                                <div id="option-239" class="option form-group">
                                    <label>
                                        Edges:
                                    </label><br>

                                    <label for="option-value-22" class="radio-inline">
                                        <img src="/img/data-options-bortik-semga-50x50.jpg" alt="with salmon +50.00 $"><br>
                                        <input type="radio" name="option[239]" value="22" id="option-value-22">
                                        with salmon
                                        <small>(+50.00 $)</small>
                                    </label>
                                    <label for="option-value-23" class="radio-inline">
                                        <img src="/img/data-options-bortik-sir-50x50.jpg" alt="with cheese +50.00 $"><br>
                                        <input type="radio" name="option[239]" value="23" id="option-value-23">
                                        with cheese
                                        <small>(+50.00 $)</small>
                                    </label>
                                </div>

                                <div id="option-242" class="option form-group">
                                    <label>
                                        Additional options:
                                    </label><br>

                                    <label for="option-value-29" class="checkbox-inline">
                                        <input type="checkbox" name="option[242][]" value="29" id="option-value-29"> pizza in the shape of heart
                                        <small>(+100.00 $)</small>
                                    </label>
                                    <label for="option-value-30" class="checkbox-inline">
                                        <input type="checkbox" name="option[242][]" value="30" id="option-value-30"> extra cheese
                                        <small>(+50.00 $)</small>
                                    </label>
                                    <label for="option-value-31" class="checkbox-inline">
                                        <input type="checkbox" name="option[242][]" value="31" id="option-value-31"> hotter!
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cart-area">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="review">
                                    <div class="stars" title="3 reviews">
                                        <i class="fa fa-star"></i>&nbsp;
                                        <i class="fa fa-star"></i>&nbsp;
                                        <i class="fa fa-star"></i>&nbsp;
                                        <i class="fa fa-star"></i>&nbsp;
                                        <i class="fa fa-star-o"></i>&nbsp;
                                    </div>

                                    <div class="add-review">
                                        <a class="btn btn-link btn-sm" onclick="$(&#39;a[href=\&#39;#tab-review\&#39;]&#39;).trigger(&#39;click&#39;);">
                                            <i class="fa fa-pencil-square-o"></i> Write a review
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="price">
                                    <div>
                                        <span class="price-fixed">270.00 $</span>
                                    </div>
                                </div>

                                <div class="text-center" style="font-size: 12px"></div>
                            </div>

                            <div class="col-md-4">
                                <div class="cart">
                                    <div class="add-to-cart clearfix" style="margin-top: 20px">
                                        <!--span class="help-block">Qty:</span-->
                                        <div class="input-group input-group-lg">
                                            <input type="text" name="quantity" class="form-control" size="2" value="1">
                                            <span class="input-group-btn">
                                                    <button type="button" id="button-cart" class="btn btn-success">
                                                        <i class="fa fa-shopping-cart"></i> &nbsp;
                                                        Add to Cart
                                                    </button>
                                                </span>
                                        </div>
                                        <input type="hidden" name="product_id" size="2" value="44">
                                    </div>

                                    <div class="links">
                                        <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;44&#39;);" data-original-title="Add to Wish List">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="btn btn-link" onclick="addToCompare(&#39;44&#39;);">
                                            <i class="fa fa-files-o"></i>&nbsp;Add to Compare
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-tabs">
                    <ul class="nav nav-tabs" id="tabs">
                        <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                        <li><a href="#tab-attribute" data-toggle="tab">Specification</a></li>
                        <li><a href="#tab-review" data-toggle="tab">Reviews (3)</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="tab-description" class="tab-pane fade in active">
                            <p>
                                All lovers of Italian cuisine know that the Pizza Margarita is the culinary embodiment of Italy. Classic cake flavored with mozzarella and red tomatoes.
                            </p>
                        </div>

                        <div id="tab-attribute" class="tab-pane fade">
                            <div class="table-responsive">
                                <table class="table table-bordered attribute">
                                    <thead>
                                    <tr>
                                        <th colspan="2">Сharacteristics</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>Сomposition:</td>
                                        <td>Spesial tomato sauce, mozzarella cheese, tomatoes, oregano and basil.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div id="tab-review" class="tab-pane fade">
                            <div id="review">
                                <div class="review-list">
                                    <div class="author">
                                        <strong>Сергей</strong>  on  16/10/2013
                                    </div>

                                    <div class="rating">
                                        <div class="stars" title="4">
                                            <i class="fa fa-star"></i>&nbsp;
                                            <i class="fa fa-star"></i>&nbsp;
                                            <i class="fa fa-star"></i>&nbsp;
                                            <i class="fa fa-star"></i>&nbsp;
                                            <i class="fa fa-star-o"></i>&nbsp;
                                        </div>
                                    </div>

                                    <div class="text">
                                        Пицца крута, но правда, мясца бы.
                                    </div>
                                </div>

                                <div class="review-list">
                                    <div class="author">
                                        <strong>Андрей</strong>  on  15/10/2013
                                    </div>

                                    <div class="rating">
                                        <div class="stars" title="4">
                                            <i class="fa fa-star"></i>&nbsp;
                                            <i class="fa fa-star"></i>&nbsp;
                                            <i class="fa fa-star"></i>&nbsp;
                                            <i class="fa fa-star"></i>&nbsp;
                                            <i class="fa fa-star-o"></i>&nbsp;
                                        </div>
                                    </div>

                                    <div class="text">
                                        Пицца довольно сытная, хотя и без мяса.
                                    </div>
                                </div>

                                <div class="review-list">
                                    <div class="author">
                                        <strong>Ира</strong>  on  10/10/2013
                                    </div>

                                    <div class="rating">
                                        <div class="stars" title="5">
                                            <i class="fa fa-star"></i>&nbsp;
                                            <i class="fa fa-star"></i>&nbsp;
                                            <i class="fa fa-star"></i>&nbsp;
                                            <i class="fa fa-star"></i>&nbsp;
                                            <i class="fa fa-star"></i>&nbsp;
                                        </div>
                                    </div>

                                    <div class="text">
                                        Пицца просто супер!!!))) Спасибо.
                                    </div>
                                </div>

                                <div class="pagination"><div class="results">Showing 1 to 3 of 3 (1 Pages)</div></div>

                            </div>
                            <!-- $end -->
                            <div class="panel panel-default form-review">
                                <div class="panel-heading" id="review-title">Write a review</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="review-name">Your Name:</label>
                                        <input type="text" id="review-name" class="form-control" name="name" placeholder="Your Name:">
                                    </div>

                                    <div class="form-group">
                                        <label for="review-text">Your Review:</label>
                                        <textarea id="review-name" class="form-control" placeholder="Your Review:" name="text" rows="5"></textarea>
                                        <p class="help-block"><small><span style="color: #FF0000;">Note:</span> HTML is not translated!</small></p>
                                    </div>

                                    <div class="form-group">
                                        <label>Rating:</label>
                                        <br>

                                        <!--span>Bad</span-->
                                        <div class="btn-group btn-group-sm" data-toggle="buttons">
                                            <label class="btn btn-red">
                                                <input type="radio" name="rating" value="1"> 1
                                            </label>
                                            <label class="btn btn-scarlet">
                                                <input type="radio" name="rating" value="2"> 2
                                            </label>
                                            <label class="btn btn-orange">
                                                <input type="radio" name="rating" value="3"> 3
                                            </label>
                                            <label class="btn btn-yellow">
                                                <input type="radio" name="rating" value="4"> 4
                                            </label>
                                            <label class="btn btn-green">
                                                <input type="radio" name="rating" value="5"> 5
                                            </label>
                                        </div>
                                        <!--span>Good</span-->
                                    </div>

                                    <div class="form-group">
                                        <lable>Enter the code in the box below:</lable>
                                        <br>
                                        <input type="text" name="captcha" value="">
                                        <img src="/js/index.html" alt="" id="captcha">
                                    </div>

                                    <div class="form-group">
                                        <a id="button-review" class="btn btn-warning">Continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box box-bestseller">
                    <div class="box-heading">
                        <span>Bestsellers</span>
                    </div>
                    <div class="box-content">

                        <div class="box-product product-grid">
                            <div class="item">
                                <div class="image">
                                    <a href="margarita.html">
                                        <img src="img/data-drinks-j7-240x240.jpg" title="Juice J7" alt="Juice J7">
                                    </a>
                                </div>
                                <div class="caption">
                                    <div class="name">
                                        <a href="margarita.html">Juice J7</a>
                                    </div>

                                    <div class="price">
                                        <div>
                                            <span class="price-fixed">95.00 $</span>
                                        </div>
                                    </div>

                                    <div class="cart">
                                        <button class="btn btn-success" type="button" onclick="addToCart(&#39;6845&#39;);">
                                            <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="image">
                                    <a href="margarita.html">
                                        <img src="img/data-drinks-sok-240x240.jpg" title="Juice Fruit Garden" alt="Juice Fruit Garden">
                                    </a>
                                </div>
                                <div class="caption">
                                    <div class="name">
                                        <a href="margarita.html">Juice Fruit Garden</a>
                                    </div>

                                    <div class="price">
                                        <div>
                                            <span class="price-fixed">55.00 $</span>
                                        </div>
                                    </div>

                                    <div class="cart">
                                        <button class="btn btn-success" type="button" onclick="addToCart(&#39;6844&#39;);">
                                            <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="image">
                                    <a href="margarita.html">
                                        <img src="img/data-pizza-siri-240x240.jpg" title="4 cheeses" alt="4 cheeses">
                                    </a>
                                </div>
                                <div class="caption">
                                    <div class="name">
                                        <a href="margarita.html">4 cheeses</a>
                                    </div>

                                    <div class="price">
                                        <div>
                                            <span class="price-fixed">270.00 $</span>
                                        </div>
                                    </div>

                                    <div class="cart">
                                        <button class="btn btn-success" type="button" onclick="addToCart(&#39;6815&#39;);">
                                            <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
            <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.imagebox').magnificPopup({
                        type:'image',
                        gallery: {
                            enabled: true,
                            preload: [1,3]
                        }
                    });
                });
            </script>

            <script type="text/javascript">
                $(document).on('click', '#button-cart', function() {
                    $.ajax({
                        url: 'index.php?route=checkout/cart/add',
                        type: 'post',
                        data: $('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], .product-info input[type=\'radio\']:checked, .product-info input[type=\'checkbox\']:checked, .product-info select, .product-info textarea'),
                        dataType: 'json',
                        success: function(json) {
                            $('.alert').remove();

                            if (json['error']) {
                                if (json['error']['option']) {
                                    for (i in json['error']['option']) {
                                        $('#option-' + i).after('<div class="alert alert-danger">' + json['error']['option'][i] + '</div>');
                                    }
                                }
                            }

                            if (json['success']) {
                                $('#notification').html('<div class="alert alert-success" style="display: none;">' + json['success'] + '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');

                                $('.alert-success').fadeIn('slow');

                                $('#cart-total').html(json['total']);

                                $('html, body').animate({ scrollTop: 0 }, 'slow');
                            }
                        }
                    });
                });
            </script>

            <script type="text/javascript" src="js/ajaxupload.js"></script>
            <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css">
            <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
        </div>
    </div>
</div><script type="text/javascript" charset="UTF-8" async="" src="js/pluso-like.js"></script>

<!-- footer -->
<div id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="column">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="about-us2.html">Wide page</a></li>
                        <li><a href="about-us3.html">Right column</a></li>
                        <li><a href="typography.html">Typography </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="column">
                    <h4>Customer Service</h4>
                    <ul>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="request-return.html">Returns</a></li>
                        <li><a href="sitemap.html">Site Map</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="column">
                    <h4>Extras</h4>
                    <ul>
                        <li><a href="brands.html">Brands</a></li>
                        <li><a href="vouchers.html">Gift Vouchers</a></li>
                        <li><a href="haffiliates.html">Affiliates</a></li>
                        <li><a href="search.html">Search</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="column">
                    <h4>My Account</h4>
                    <ul>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="create-account.html">Register</a></li>
                        <li><a href="forgot-password.html">Password</a></li>
                        <li><a href="shopping-cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-9 ">
                <div id="about">
                    <h3>Order pizza online</h3>
                    <p>
                               <span id="result_box" lang="en">
                                    <span class="hps">You are welcome to site</span>
                                    <span class="hps">of pizza </span>
                                    <span class="hps">and Japanese cuisine</span>
                                    <span class="hps">in your city.</span>
                                    <span class="hps">Here you always</span>
                                    <span class="hps">can order&nbsp;</span>
                                    <span class="hps">pizza,</span>
                                    <span class="hps">sushi, rolls</span>
                                    <span class="hps">and beverages for home delivery.</span>
                                    <span class="hps">Pepperoni</span>
                                    <span>,</span>
                                    <span class="hps">Margarita</span>
                                    <span>, 4</span>
                                    <span class="hps">cheese</span>
                                    <span class="hps">and others.</span>
                                    <span class="hps">In the menu</span>
                                    <span class="hps">of Japanese cuisine</span>
                                    <span class="hps">you can order</span>
                                    <span class="hps">sushi with</span>
                                    <span class="hps">salmon and eel</span>
                                    <span>, classic</span>
                                    <span class="hps">California</span>
                                    <span class="hps">and</span>
                                    <span class="hps">Philadelphia </span>
                                </span>
                        <span id="result_box" lang="en">
                                    <span class="hps">rolls</span>
                                    <span>,</span>
                                    <span class="hps">as well as</span>
                                    <span class="hps">warm rolls</span>
                                    <span class="hps">Tempura</span>
                                    <span>.</span>
                                    <span class="hps">You will be pleased</span>
                                    <span class="hps">with the</span>
                                    <span class="hps">new </span>
                                    <span class="hps">sushi</span>
                                    <span class="hps">with spicy and</span>
                                    <span class="hps">fragrant sauce</span>
                                    <span>.</span>
                                    <span class="hps">Free</span>
                                    <span class="hps">pizza </span>
                                </span>
                        <span id="result_box" lang="en">
                                    <span class="hps">and Japanese cuisine </span>
                                    <span>delivery</span>
                                    <span> in your city </span>
                                    <span class="hps">.</span>
                                </span>
                    </p>
                </div>
            </div>
            <div class="col-sm-3 text-right">
                <div id="powered">
                    <a href="http://conceptlogic.org/" title="Website design, ecommerce development">Designed by Concept Logic</a>
                    <br>
                    Pizza Chef © 2014
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //footer -->
</div>


<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="/js/common.js"></script>

</body>
</html>
