
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
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="/css/colorbox.css">
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
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

            <div id="content">
                <div class="box product-slider clearfix">

                    <div class="banner clearfix pull-right" style="width: 200px">
                        <div class="item pull-left">
                            <a href="pizza.html">
                                <img src="img/data-banners-03-200x140.jpg" alt="Hot" title="Hot">
                            </a>
                            <br>
                        </div>
                        <div class="item pull-left">
                            <a href="pizza.html">
                                <img src="img/data-banners-07-200x140.jpg" alt="Special" title="Special">
                            </a>
                            <br>
                        </div>
                    </div>

                    <div class="box-content hidden-xs" style="margin-right: 250px;">
                        <div class="bx-wrapper">
                            <div class="bx-viewport">
                                <div id="product-slider-0">
                                    <div class="slide-item" >
                                        <div class="si-image">
                                            <a href="margarita.html">
                                                <img src="img/data-pizza-margarita-300x300.jpg" alt="Margarita">
                                            </a>
                                        </div>

                                        <div class="si-caption">
                                            <div class="si-title">
                                                <a href="margarita.html">Margarita</a>
                                            </div>

                                            <div class="si-desc">
                                                    <span>
                                                        All lovers of Italian cuisine know that the Pizza Margarita is the culinary embodiment of Italy. Classic cake flavored with mozzarella and red tomatoes.
                                                    </span>
                                            </div>

                                            <div class="si-rating rating">
                                                <div class="stars" title="Based on 3 reviews.">
                                                    <i class="fa fa-star"></i>&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;
                                                    <i class="fa fa-star-o"></i>&nbsp;
                                                </div>
                                            </div>

                                            <div class="si-price price">
                                                <div><span class="price-fixed">270.00 $</span></div>
                                            </div>

                                            <div class="si-buy cart">
                                                <button onclick="addToCart(&#39;44&#39;);" type="button" class="btn btn-success">
                                                    <span>Buy now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide-item">
                                        <div class="si-image">
                                            <a href="margarita.html">
                                                <img src="img/data-pizza-pizza-diablo-300x300.jpg" alt="Diablo">
                                            </a>
                                        </div>

                                        <div class="si-caption">
                                            <div class="si-title">
                                                <a href="margarita.html">Diablo</a>
                                            </div>

                                            <div class="si-desc">
                                                    <span>
                                                        Spicy, piquant and very rich. Hunter sausage, salami, hot pepper jalapenos. Pizza can be served as main dish, and it can be also a wonderful appetiser.
                                                    </span>
                                            </div>

                                            <div class="si-rating rating">
                                                <div class="stars" title="Based on 1 reviews.">
                                                    <i class="fa fa-star"></i>&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;
                                                    <i class="fa fa-star"></i>&nbsp;
                                                </div>
                                            </div>

                                            <div class="si-price price">
                                                <div><span class="price-fixed">270.00 $</span></div>
                                            </div>

                                            <div class="si-buy cart">
                                                <button onclick="addToCart(&#39;6822&#39;);" type="button" class="btn btn-success">
                                                    <span>Buy now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide-item">
                                        <div class="si-image">
                                            <a href="margarita.html">
                                                <img src="img/data-pizza-kavkaz-300x300.jpg" alt="Caucasian">
                                            </a>
                                        </div>

                                        <div class="si-caption">
                                            <div class="si-title">
                                                <a href="margarita.html">Caucasian</a>
                                            </div>

                                            <div class="si-desc">
                                                    <span>
                                                        Substantial beef pizza is topped with red onion rings and tomatoes. It will satisfy the hunger of the real gormandizer.
                                                    </span>
                                            </div>

                                            <div class="si-price price">
                                                <div><span class="price-fixed">300.00 $</span></div>
                                            </div>

                                            <div class="si-buy cart">
                                                <button onclick="addToCart(&#39;6816&#39;);" type="button" class="btn btn-success">
                                                    <span>Buy now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide-item">
                                        <div class="si-image">
                                            <a href="margarita.html">
                                                <img src="img/data-rolls-rolls-maki-losos-ugor-300x300.jpg" alt="Rolls Minnesota">
                                            </a>
                                        </div>

                                        <div class="si-caption">
                                            <div class="si-title">
                                                <a href="margarita.html">Rolls Minnesota</a>
                                            </div>

                                            <div class="si-desc">
                                                    <span>
                                                        Fundamentally new approach to the making of the famous Philadelphia roll. On-site salmon smoked eel is placed, we added to the cucumber slices of exotic avocado, and alsoo we mixed fancy red fish w..
                                                    </span>
                                            </div>


                                            <div class="si-price price">
                                                <div><span class="price-fixed">250.00 $</span></div>
                                            </div>

                                            <div class="si-buy cart">
                                                <button onclick="addToCart(&#39;6829&#39;);" type="button" class="btn btn-success">
                                                    <span>Buy now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slide-item">
                                        <div class="si-image">
                                            <a href="margarita.html">
                                                <img src="img/data-rolls-sushi-ikra-300x300.jpg" alt="Sushi with red caviar">
                                            </a>
                                        </div>

                                        <div class="si-caption">
                                            <div class="si-title">
                                                <a href="margarita.html">Sushi with red caviar</a>
                                            </div>

                                            <div class="si-desc">
                                                    <span>
                                                        Traditional gunkan with red caviar.
                                                    </span>
                                            </div>

                                            <div class="si-price price">
                                                <div><span class="price-fixed">80.00 $</span></div>
                                            </div>

                                            <div class="si-buy cart">
                                                <button onclick="addToCart(&#39;6836&#39;);" type="button" class="btn btn-success">
                                                    <span>Buy now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="bx-controls bx-has-pager bx-has-controls-direction">
                                <div class="bx-pager bx-default-pager"></div>
                                <div class="bx-controls-direction" id="bx-controls-direction"></div>
                            </div>
                        </div>
                    </div>

                    <div id="banner0" class="banner clearfix">
                        <div class="item pull-left">
                            <a href="pizza.html">
                                <img src="img/data-banners-05-358x251.jpg" alt="Only vegetable" title="Only vegetable">
                            </a>
                        </div>
                        <div class="item pull-left">
                            <a href="pizza.html">
                                <img src="img/data-banners-04-358x251.jpg" alt="4 chees" title="4 chees">
                            </a>
                        </div>
                        <div class="item pull-left">
                            <a href="pizza.html">
                                <img src="img/data-banners-06-358x251.jpg" alt="Fresh basil" title="Fresh basil">
                            </a>
                        </div>
                    </div>

                    <div class="box">

                        <ul id="product-tabs-0" class="nav nav-tabs">
                            <li class="active">
                                <a href="#product-tab-0-featured" data-toggle="tab">
                                    <span>Featured Products</span>
                                </a>
                            </li>
                            <li>
                                <a href="#product-tab-0-bestseller" data-toggle="tab">
                                    <span>Bestsellers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#product-tab-0-latest" data-toggle="tab">
                                    <span>Latest</span>
                                </a>
                            </li>
                        </ul>


                        <div class="box-content tab-content" id="product-slideshow0">

                            <div class="box-product product-grid tab-pane fade in active" id="product-tab-0-featured">
                                <!-- Begin box-product div -->
                                <div class="item">
                                    <div class="image">
                                        <a href="margarita.html">
                                            <img src="img/data-pizza-margarita-240x240.jpg" alt="Margarita" width="240" height="240">
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
                                            <button onclick="addToCart(&#39;44&#39;);" type="button" class="btn btn-success">
                                                <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Begin box-product div -->
                                <div class="item">
                                    <div class="image">
                                        <a href="margarita.html">
                                            <img src="img/data-pizza-pizza-diablo-240x240.jpg" alt="Diablo" width="240" height="240">
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
                                            <button onclick="addToCart(&#39;6822&#39;);" type="button" class="btn btn-success">
                                                <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Begin box-product div -->
                                <div class="item">
                                    <div class="image">
                                        <a href="margarita.html">
                                            <img src="img/data-rolls-rolls-filadelfia-240x240.jpg" alt="Rolls Philadelphia" width="240" height="240">
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
                                            <button onclick="addToCart(&#39;6827&#39;);" type="button" class="btn btn-success">
                                                <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Begin box-product div -->
                                <div class="item">

                                    <div class="image">
                                        <a href="margarita.html">
                                            <img src="img/data-rolls-sushi-ikra-240x240.jpg" alt="Sushi with red caviar" width="240" height="240">
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
                                            <button onclick="addToCart(&#39;6836&#39;);" type="button" class="btn btn-success">
                                                <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box-product product-grid tab-pane fade" id="product-tab-0-bestseller">
                                <!-- Begin box-product div -->
                                <div class="item">
                                    <div class="image">
                                        <a href="margarita.html">
                                            <img src="img/data-drinks-j7-240x240.jpg" alt="Juice J7" width="240" height="240">
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
                                            <button onclick="addToCart(&#39;6845&#39;);" type="button" class="btn btn-success">
                                                <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Begin box-product div -->
                                <div class="item">
                                    <div class="image">
                                        <a href="margarita.html">
                                            <img src="img/data-drinks-sok-240x240.jpg" alt="Juice Fruit Garden" width="240" height="240">
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
                                            <button onclick="addToCart(&#39;6844&#39;);" type="button" class="btn btn-success">
                                                <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Begin box-product div -->
                                <div class="item">
                                    <div class="image">
                                        <a href="margarita.html">
                                            <img src="img/data-pizza-siri-240x240.jpg" alt="4 cheeses" width="240" height="240">
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
                                            <button onclick="addToCart(&#39;6815&#39;);" type="button" class="btn btn-success">
                                                <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Begin box-product div -->
                                <div class="item">
                                    <div class="image">
                                        <a href="margarita.html">
                                            <img src="img/data-pizza-margarita-240x240.jpg" alt="Margarita" width="240" height="240">
                                        </a>
                                    </div>

                                    <div class="caption">
                                        <div class="name">
                                            <a href="http://chef.erpshop.ru/pizza/margarita">Margarita</a>
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
                                            <button onclick="addToCart(&#39;44&#39;);" type="button" class="btn btn-success">
                                                <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box-product product-grid tab-pane fade" id="product-tab-0-latest">

                                <!-- Begin box-product div -->
                                <div class="item">

                                    <div class="image">
                                        <a href="margarita.html">
                                            <img src="img/data-drinks-sprite-240x240.jpg" alt="Sprite" width="240" height="240">
                                        </a>
                                    </div>

                                    <div class="caption">
                                        <div class="name">
                                            <a href="margarita.html">Sprite</a>
                                        </div>

                                        <div class="price">
                                            <div>
                                                <span class="price-fixed">70.00 $</span>
                                            </div>
                                        </div>

                                        <div class="cart">
                                            <button onclick="addToCart(&#39;6852&#39;);" type="button" class="btn btn-success">
                                                <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Begin box-product div -->
                                <div class="item">

                                    <div class="image">
                                        <a href="margarita.html">
                                            <img src="img/data-drinks-fanta-240x240.jpg" alt="Fanta" width="240" height="240">
                                        </a>
                                    </div>

                                    <div class="caption">
                                        <div class="name">
                                            <a href="margarita.html">Fanta</a>
                                        </div>

                                        <div class="price">
                                            <div>
                                                <span class="price-fixed">70.00 $</span>
                                            </div>
                                        </div>

                                        <div class="cart">
                                            <button onclick="addToCart(&#39;6850&#39;);" type="button" class="btn btn-success">
                                                <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Begin box-product div -->
                                <div class="item">

                                    <div class="image">
                                        <a href="margarita.html">
                                            <img src="img/data-drinks-coca-240x240.jpg" alt="Coca-cola" width="240" height="240">
                                        </a>
                                    </div>

                                    <div class="caption">
                                        <div class="name">
                                            <a href="margarita.html">Coca-cola</a>
                                        </div>

                                        <div class="price">
                                            <div>
                                                <span class="price-fixed">70.00 $</span>
                                            </div>
                                        </div>

                                        <div class="cart">
                                            <button onclick="addToCart(&#39;6848&#39;);" type="button" class="btn btn-success">
                                                <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Begin box-product div -->
                                <div class="item">

                                    <div class="image">
                                        <a href="margarita.html">
                                            <img src="img/data-drinks-voda-negaz-240x240.jpg" alt="Mineral Water Lipetski Buvet wit.." width="240" height="240">
                                        </a>
                                    </div>

                                    <div class="caption">
                                        <div class="name">
                                            <a href="margarita.html">Mineral Water Lipetski Buvet wit..</a>
                                        </div>

                                        <div class="price">
                                            <div>
                                                <span class="price-fixed">45.00 $</span>
                                            </div>
                                        </div>

                                        <div class="cart">
                                            <button onclick="addToCart(&#39;6847&#39;);" type="button" class="btn btn-success">
                                                <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel">
                        <div class="bx-wrapper">
                            <div class="bx-viewport">
                                <ul id="carousel0" class="slider">
                                    <li>
                                        <a class="item" href="drinks-dostavka.html">
                                            <img src="img/data-banners-napitki-vologda-180x180.jpg" alt="Beverages" title="Beverages">
                                            <div class="caption">Beverages</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="item" href="pizza.html">
                                            <img src="img/data-banners-italy-180x180.jpg" alt="Italian cuisine" title="Italian cuisine">
                                            <div class="caption">Italian cuisine</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="item" href="japan.html">
                                            <img src="img/data-banners-jap-180x180.jpg" alt="Japanese cuisine" title="Japanese cuisine">
                                            <div class="caption">Japanese cuisine</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="bx-controls bx-has-controls-direction">
                                <div class="bx-controls-direction" id="bx-controls-direction2"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
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


<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="/js/common.js"></script>

</body>
</html>
