
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

            <div id="content">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="drinks-dostavka.html">Beverages</a></li>
                </ol>

                <div class="category-info clearfix">
                    <h1>
                        @if($category == 'beverages')
                            BEVERAGES
                        @elseif($category == 'pizza')
                            PIZZA
                        @elseif($category == 'japan')
                            JAPAN
                        @endif
                    </h1>
                </div>


                <div class="product-filter clearfix">
                    <div class="display">
                        <div class="btn-group btn-group-sm">
                            <a class="btn btn-default" onclick="display(&#39;list&#39;);"><i class="fa fa-th-list"></i> List</a>
                            <span class="btn btn-default" disabled="disabled"><i class="fa fa-th"></i> Grid</span>
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

                <div class="box-product product-grid">

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
                            <div class="description">
                                Choice of juices 1 litre...
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

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;6844&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;6844&#39;);">
                                    <i class="fa fa-files-o"></i> <span>Add to Compare</span>
                                </a>
                            </div>
                        </div>
                    </div>

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
                            <div class="description">
                                Choice of juices 1 litre...
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

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;6845&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;6845&#39;);">
                                    <i class="fa fa-files-o"></i> <span>Add to Compare</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <a href="margarita.html">
                                <img src="img/data-drinks-voda-gaz-240x240.jpg" title="Mineral Water Lipetski Buvet with gas" alt="Mineral Water Lipetski Buvet with gas">
                            </a>
                        </div>
                        <div class="caption">
                            <div class="name">
                                <a href="margarita.html">Mineral Water Lipetski Buvet with gas</a>
                            </div>
                            <div class="description">
                                Mineral Water Lipetski Buvet with gas 1,5 litres...
                            </div>

                            <div class="price">
                                <div>
                                    <span class="price-fixed">45.00 $</span>
                                </div>
                            </div>

                            <div class="cart">
                                <button class="btn btn-success" type="button" onclick="addToCart(&#39;6846&#39;);">
                                    <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                </button>

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;6846&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;6846&#39;);">
                                    <i class="fa fa-files-o"></i> <span>Add to Compare</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <a href="margarita.html">
                                <img src="img/data-drinks-voda-negaz-240x240.jpg" title="Mineral Water Lipetski Buvet without gas" alt="Mineral Water Lipetski Buvet without gas">
                            </a>
                        </div>
                        <div class="caption">
                            <div class="name">
                                <a href="margarita.html">Mineral Water Lipetski Buvet without gas</a>
                            </div>
                            <div class="description">
                                Mineral Water Lipetski Buvet without gas 1,5 litres...
                            </div>

                            <div class="price">
                                <div>
                                    <span class="price-fixed">45.00 $</span>
                                </div>
                            </div>

                            <div class="cart">
                                <button class="btn btn-success" type="button" onclick="addToCart(&#39;6847&#39;);">
                                    <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                </button>

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;6847&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;6847&#39;);">
                                    <i class="fa fa-files-o"></i> <span>Add to Compare</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <a href="margarita.html">
                                <img src="img/data-drinks-coca-240x240.jpg" title="Coca-cola" alt="Coca-cola">
                            </a>
                        </div>
                        <div class="caption">
                            <div class="name">
                                <a href="margarita.html">Coca-cola</a>
                            </div>
                            <div class="description">
                                Coca-cola 1 or 2 litres...
                            </div>

                            <div class="price">
                                <div>
                                    <span class="price-fixed">70.00 $</span>
                                </div>
                            </div>

                            <div class="cart">
                                <button class="btn btn-success" type="button" onclick="addToCart(&#39;6848&#39;);">
                                    <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                </button>

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;6848&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;6848&#39;);">
                                    <i class="fa fa-files-o"></i> <span>Add to Compare</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <a href="margarita.html">
                                <img src="img/data-drinks-fanta-240x240.jpg" title="Fanta" alt="Fanta">
                            </a>
                        </div>
                        <div class="caption">
                            <div class="name">
                                <a href="margarita.html">Fanta</a>
                            </div>
                            <div class="description">
                                Fanta 1 or 2 litres...
                            </div>

                            <div class="price">
                                <div>
                                    <span class="price-fixed">70.00 $</span>
                                </div>
                            </div>

                            <div class="cart">
                                <button class="btn btn-success" type="button" onclick="addToCart(&#39;6850&#39;);">
                                    <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                </button>

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;6850&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;6850&#39;);">
                                    <i class="fa fa-files-o"></i> <span>Add to Compare</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <a href="margarita.html">
                                <img src="img/data-drinks-sprite-240x240.jpg" title="Sprite" alt="Sprite">
                            </a>
                        </div>
                        <div class="caption">
                            <div class="name">
                                <a href="margarita.html">Sprite</a>
                            </div>
                            <div class="description">
                                Sprite 1 or 2 litres...
                            </div>

                            <div class="price">
                                <div>
                                    <span class="price-fixed">70.00 $</span>
                                </div>
                            </div>

                            <div class="cart">
                                <button class="btn btn-success" type="button" onclick="addToCart(&#39;6852&#39;);">
                                    <i class="fa fa-shopping-cart"></i> <span>Add to Cart</span>
                                </button>

                                <a class="btn btn-danger tooltip-right" title="" onclick="addToWishList(&#39;6852&#39;);" data-original-title="Add to Wish List">
                                    <i class="fa fa-heart-o"></i> <!--span>Add to Wish List</span-->
                                </a>

                                <a class="btn btn-link" onclick="addToCompare(&#39;6852&#39;);">
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
