
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
    <link href="img/favicon.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/colorbox.css">
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/product_slider.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/product_tabs.css" media="screen">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.js"></script>
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
                        <a href="index.html"><img src="img/logo_pizza.png" title="Pizza Chef" alt="Pizza Chef"></a>
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
            <div id="column-left" class="hidden-xs hidden-sm">
                <div class="box">
                    <div class="box-heading">
                        <span>Categories</span>
                    </div>
                    <div class="box-content">
                        <ul class="box-category treemenu">
                            @foreach($categories as $category)
                                <li><a href="/{{$category->code}}" class="active"><span>{{$category->name}} (10)</span></a></li>
                            @endforeach
{{--                            <li><a href="pizza.html" class="active"><span>Pizza (10)</span></a></li>--}}
{{--                            <li><a href="japan.html"><span>Japan (17)</span></a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="rolli.html"><span>Rolls (6)</span></a></li>--}}
{{--                                    <li><a href="teplie-rolli.html"><span>Warm rolls (3)</span></a></li>--}}
{{--                                    <li><a href="sushi.html"><span>Sushi (5)</span></a></li>--}}
{{--                                    <li><a href="spicy-sushi.html"><span>Spicy-sushi (3)</span></a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="drinks-dostavka.html"><span>Beverages (7)</span></a></li>--}}
                        </ul>
                    </div>
                </div>

                <div id="banner0" class="banner clearfix">
                    <div class="item pull-left">
                        <a href="http://conceptlogic.ru/">
                            <img src="img/data-banners-banner-cl-2-255x382.jpg" alt="E-commerce solutions" title="E-commerce solutions">
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
                                        <img alt="Margarita" title="Margarita" src="img/data-pizza-margarita-80x80.jpg">
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
                                        <img alt="Diablo" title="Diablo" src="img/data-pizza-pizza-diablo-80x80.jpg">
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
                                        <img alt="Rolls Philadelphia" title="Rolls Philadelphia" src="img/data-rolls-rolls-filadelfia-80x80.jpg">
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
                                        <img alt="Sushi with red caviar" title="Sushi with red caviar" src="img/data-rolls-sushi-ikra-80x80.jpg">
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
                </ol>

                <div class="category-info clearfix">
                    <h1>Pizza</h1>
                    <p>
                        <span style="font-family: arial, sans-serif; font-size: 13px; line-height: 16px;">Pizza - </span><span id="result_box" lang="en"><span class="hps">Pizza</span> <span class="hps">-</span> <span class="hps">Italian</span> <span class="hps">national dish </span><span class="hps">in the shape of</span><span class="hps"> circular</span> open-faced flat cake <span class="hps">covered</span> <span class="hps">in the classic version with</span> <span class="hps">tomatoes and</span> <span class="hps">melted cheese</span><span>.</span> <span class="hps">Cheese is</span> <span class="hps">the main ingredient</span> <span class="hps">of pizza.</span> <span class="hps">One</span> <span class="hps">of the most popular</span> <span class="hps">dishes in the world</span><span>.</span></span>
                    </p>
                </div>


                <div class="product-filter clearfix">
                    <div class="display">
                        <div class="btn-group btn-group-sm">
                            <span class="btn btn-default" disabled="disabled"><i class="fa fa-th-list"></i> List</span>
                            <a class="btn btn-default" onclick="display(&#39;grid&#39;);"><i class="fa fa-th"></i> Grid</a>
                        </div>
                    </div>

                    <div class="product-compare">
                        <a class="btn btn-default btn-sm" href="index.html" id="compare-total">
                            <i class="fa fa-files-o"></i> Product Compare (0)
                        </a>
                    </div>

                    <div class="limit">
                        <div class="dropdown">
                            <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="limit-goods" data-toggle="dropdown">
                                <i class="fa fa-level-down"></i>&nbsp;Show:&nbsp;<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="limit-goods">
                                <li class="disabled"><a tabindex="-1" href="#">20</a></li>
                                <li><a tabindex="-1" href="#">25</a></li>
                                <li><a tabindex="-1" href="#">50</a></li>
                                <li><a tabindex="-1" href="#">75</a></li>
                                <li><a tabindex="-1" href="#">100</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="sort">
                        <div class="dropdown">
                            <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="sort-goods" data-toggle="dropdown">
                                <i class="fa fa-sort-amount-desc"></i>&nbsp;Sort By:&nbsp;<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="sort-goods">
                                <li class="disabled"><a tabindex="-1" href="#">Default</a></li>
                                <li><a tabindex="-1" href="#">Name (A - Z)</a></li>
                                <li><a tabindex="-1" href="#">Name (Z - A)</a></li>
                                <li><a tabindex="-1" href="#">Price (Low &gt; High)</a></li>
                                <li><a tabindex="-1" href="#">Price (High &gt; Low)</a></li>
                                <li><a tabindex="-1" href="#">Rating (Highest)</a></li>
                                <li><a tabindex="-1" href="#">Rating (Lowest)</a></li>
                                <li><a tabindex="-1" href="#">Model (A - Z)</a></li>
                                <li><a tabindex="-1" href="#">Model (Z - A)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="box-product product-list">
                    <div class="item">
                        <div class="image">
                            <a href="margarita.html">
                                <img src="img/data-pizza-margarita-240x240.jpg" title="Margarita" alt="Margarita">
                            </a>
                        </div>
                        <div class="caption">
                            <div class="name">
                                <a href="margarita.html">Margarita</a>
                            </div>
                            <div class="description">
                                All lovers of Italian cuisine know that the Pizza Margarita is the culinary embodiment of Italy. Classic cake flavored with mozzarella and red tomatoes...
                            </div>

                            <div class="price">
                                <div>
                                    <span class="price-fixed">270.00 $</span>
                                </div>
                            </div>

                            <div class="rating">
                                <div class="stars" title="Based on 3 reviews.">
                                    <i class="fa fa-star"></i>&nbsp;
                                    <i class="fa fa-star"></i>&nbsp;
                                    <i class="fa fa-star"></i>&nbsp;
                                    <i class="fa fa-star"></i>&nbsp;
                                    <i class="fa fa-star-o"></i>&nbsp;
                                </div>
                            </div>

                            <div class="cart">
                                <button class="btn btn-success" type="button" onclick="addToCart(&#39;44&#39;);">
                                    <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                </button>

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;44&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;44&#39;);">
                                    <i class="fa fa-files-o"></i> <span>Add to Compare</span>
                                </a>
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
                            <div class="description">
                                Embodies an elegant combination of completely different tastes of noble cheese. Fragrant spices complement ulinary composition...
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

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;6815&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;6815&#39;);">
                                    <i class="fa fa-files-o"></i> <span>Add to Compare</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <a href="margarita.html">
                                <img src="img/data-pizza-kavkaz-240x240.jpg" title="Caucasian" alt="Caucasian">
                            </a>
                        </div>
                        <div class="caption">
                            <div class="name">
                                <a href="margarita.html">Caucasian</a>
                            </div>
                            <div class="description">
                                Substantial beef pizza is topped with red onion rings and tomatoes. It will satisfy the hunger of the real gormandizer...
                            </div>

                            <div class="price">
                                <div>
                                    <span class="price-fixed">300.00 $</span>
                                </div>
                            </div>


                            <div class="cart">
                                <button class="btn btn-success" type="button" onclick="addToCart(&#39;6816&#39;);">
                                    <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                </button>

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;6816&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;6816&#39;);">
                                    <i class="fa fa-files-o"></i> <span>Add to Compare</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <a href="margarita.html">
                                <img src="img/data-pizza-russia-240x240.jpg" title="Russia" alt="Russia">
                            </a>
                        </div>
                        <div class="caption">
                            <div class="name">
                                <a href="margarita.html">Russia</a>
                            </div>
                            <div class="description">
                                One of the most popular kind of pizza. Beautiful combination of cheese, mushrooms and ham will certanly enjoy connoisseurs of traditional flavour...
                            </div>

                            <div class="price">
                                <div>
                                    <span class="price-fixed">270.00 $</span>
                                </div>
                            </div>

                            <div class="cart">
                                <button class="btn btn-success" type="button" onclick="addToCart(&#39;6817&#39;);">
                                    <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                </button>

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;6817&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;6817&#39;);">
                                    <i class="fa fa-files-o"></i> <span>Add to Compare</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <a href="margarita.html">
                                <img src="img/data-pizza-moreproduct-240x240.jpg" title="With seafood" alt="With seafood">
                            </a>
                        </div>
                        <div class="caption">
                            <div class="name">
                                <a href="margarita.html">With seafood</a>
                            </div>
                            <div class="description">
                                Seafood combined with various ingredients gives gentle incomparable taste. Pizza with seafood reflects the tastes and manners of Mediterranean Italy...
                            </div>

                            <div class="price">
                                <div>
                                    <span class="price-fixed">300.00 $</span>
                                </div>
                            </div>

                            <div class="cart">
                                <button class="btn btn-success" type="button" onclick="addToCart(&#39;6818&#39;);">
                                    <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                </button>

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;6818&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;6818&#39;);">
                                    <i class="fa fa-files-o"></i> <span>Add to Compare</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <a href="margarita.html">
                                <img src="img/data-pizza-4-sezona-240x240.jpg" title="MiX" alt="MiX">
                            </a>
                        </div>
                        <div class="caption">
                            <div class="name">
                                <a href="margarita.html">MiX</a>
                            </div>
                            <div class="description">
                                One of the oldest pizza recipes - a mention of it can be found in the culinary history of Italy since 1660. Pizza «Mix» is "edible" interpretation of the four seasons, thus attracting many pizza lovers...
                            </div>
                            <div class="price">
                                <div>
                                    <span class="price-fixed">300.00 $</span>
                                </div>
                            </div>

                            <div class="rating">
                                <div class="stars" title="Based on 1 reviews.">
                                    <i class="fa fa-star"></i>&nbsp;
                                    <i class="fa fa-star"></i>&nbsp;
                                    <i class="fa fa-star"></i>&nbsp;
                                    <i class="fa fa-star"></i>&nbsp;
                                    <i class="fa fa-star"></i>&nbsp;
                                </div>
                            </div>

                            <div class="cart">
                                <button class="btn btn-success" type="button" onclick="addToCart(&#39;6819&#39;);">
                                    <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                </button>

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;6819&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;6819&#39;);">
                                    <i class="fa fa-files-o"></i> <span>Add to Compare</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <a href="margarita.html">
                                <img src="img/data-pizza-palermo-240x240.jpg" title="Palermo" alt="Palermo">
                            </a>
                        </div>
                        <div class="caption">
                            <div class="name">
                                <a href="margarita.html">Palermo</a>
                            </div>
                            <div class="description">
                                Tender boiled chicken breast combined with mushrooms, juicy tomatoes and pickles...
                            </div>

                            <div class="price">
                                <div>
                                    <span class="price-fixed">270.00 $</span>
                                </div>
                            </div>

                            <div class="cart">
                                <button class="btn btn-success" type="button" onclick="addToCart(&#39;6820&#39;);">
                                    <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                </button>

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;6820&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;6820&#39;);">
                                    <i class="fa fa-files-o"></i> <span>Add to Compare</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <a href="margarita.html">
                                <img src="img/data-pizza-margarita-240x240.jpg" title="Margarita" alt="Margarita">
                            </a>
                        </div>
                        <div class="caption">
                            <div class="name">
                                <a href="margarita.html">Margarita</a>
                            </div>
                            <div class="description">
                                All lovers of Italian cuisine know that the Pizza Margarita is the culinary embodiment of Italy. Classic cake flavored with mozzarella and red tomatoes...
                            </div>

                            <div class="price">
                                <div>
                                    <span class="price-fixed">270.00 $</span>
                                </div>
                            </div>

                            <div class="rating">
                                <div class="stars" title="Based on 3 reviews.">
                                    <i class="fa fa-star"></i>&nbsp;
                                    <i class="fa fa-star"></i>&nbsp;
                                    <i class="fa fa-star"></i>&nbsp;
                                    <i class="fa fa-star"></i>&nbsp;
                                    <i class="fa fa-star-o"></i>&nbsp;
                                </div>
                            </div>

                            <div class="cart">
                                <button class="btn btn-success" type="button" onclick="addToCart(&#39;44&#39;);">
                                    <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                </button>

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;44&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;44&#39;);">
                                    <i class="fa fa-files-o"></i> <span>Add to Compare</span>
                                </a>
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
                            <div class="description">
                                Embodies an elegant combination of completely different tastes of noble cheese. Fragrant spices complement ulinary composition...
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

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;6815&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;6815&#39;);">
                                    <i class="fa fa-files-o"></i> <span>Add to Compare</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <a href="margarita.html">
                                <img src="img/data-pizza-kavkaz-240x240.jpg" title="Caucasian" alt="Caucasian">
                            </a>
                        </div>
                        <div class="caption">
                            <div class="name">
                                <a href="margarita.html">Caucasian</a>
                            </div>
                            <div class="description">
                                Substantial beef pizza is topped with red onion rings and tomatoes. It will satisfy the hunger of the real gormandizer...
                            </div>

                            <div class="price">
                                <div>
                                    <span class="price-fixed">300.00 $</span>
                                </div>
                            </div>


                            <div class="cart">
                                <button class="btn btn-success" type="button" onclick="addToCart(&#39;6816&#39;);">
                                    <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                </button>

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;6816&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;6816&#39;);">
                                    <i class="fa fa-files-o"></i> <span>Add to Compare</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="pagination">
                        <div class="results">Showing 1 to 10 of 10 (1 Pages)</div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                function display(view) {
                    if (view == 'list')
                    {
                        $('#content .product-grid').attr('class', 'product-list box-product');
                        $('.display').html('' +
                            '<div class="btn-group btn-group-sm">' +
                            '<span class="btn btn-default" disabled="disabled"><i class="fa fa-th-list"></i> List</span>' +
                            '<a class="btn btn-default" onclick="display(\'grid\');"><i class="fa fa-th"></i> Grid</a>' +
                            '</div>'
                        );
                        $.totalStorage('display', 'list');
                    }
                    else
                    {
                        $('#content .product-list').attr('class', 'product-grid box-product');
                        $('.display').html('' +
                            '<div class="btn-group btn-group-sm">' +
                            '<a class="btn btn-default" onclick="display(\'list\');"><i class="fa fa-th-list"></i> List</a>' +
                            '<span class="btn btn-default" disabled="disabled"><i class="fa fa-th"></i> Grid</span>' +
                            '</div>'
                        );
                        $.totalStorage('display', 'grid');
                    }
                }
                view = $.totalStorage('display');
                if (view) {
                    display(view);
                } else {
                    display('list');
                }
            </script>
        </div>
    </div>


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


<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/common.js"></script>

</body>
</html>
