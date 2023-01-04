@extends('layout.store')
@section('page_title', 'checkout ')
@section('content')

    <body>
        <div class="container">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <div class="page-wrapper">
                <div class="top-notice bg-primary text-white">
                    <div class="container text-center">
                        <h5 class="d-inline-block">Get Up to <b>40% OFF</b> New-Season Styles</h5>
                        <a href="category.html" class="category">MEN</a>
                        <a href="category.html" class="category ml-2 mr-3">WOMEN</a>
                        <small>* Limited time only.</small>
                        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                    </div>
                    <!-- End .container -->
                </div>
                <!-- End .top-notice -->

                <header class="header">
                    <div class="header-top">
                        <div class="container">
                            <div class="header-left d-none d-sm-block">
                                <p class="top-message text-uppercase">FREE Returns. Standard Shipping Orders $99+</p>
                            </div>
                            <!-- End .header-left -->

                            <div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">
                                <div class="header-dropdown dropdown-expanded d-none d-lg-block">
                                    <a href="#">Links</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="dashboard.html">My Account</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="wishlist.html">My Wishlist</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="login.html" class="login-link">Log In</a></li>
                                        </ul>
                                    </div>
                                    <!-- End .header-menu -->
                                </div>
                                <!-- End .header-dropown -->

                                <span class="separator"></span>

                                <div class="header-dropdown">
                                    <a href="#"><i class="flag-us flag"></i>ENG</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                                            </li>
                                            <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                                        </ul>
                                    </div>
                                    <!-- End .header-menu -->
                                </div>
                                <!-- End .header-dropown -->

                                <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                                    <a href="#">USD</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">USD</a></li>
                                        </ul>
                                    </div>
                                    <!-- End .header-menu -->
                                </div>
                                <!-- End .header-dropown -->

                                <span class="separator"></span>

                                <div class="social-icons">
                                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                                    <a href="#" class="social-icon social-instagram icon-instagram"
                                        target="_blank"></a>
                                </div>
                                <!-- End .social-icons -->
                            </div>
                            <!-- End .header-right -->
                        </div>
                        <!-- End .container -->
                    </div>
                    <!-- End .header-top -->

                    <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                        <div class="container">
                            <div class="header-left col-lg-2 w-auto pl-0">
                                <button class="mobile-menu-toggler text-primary mr-2" type="button">
                                    <i class="fas fa-bars"></i>
                                </button>
                                <a href="demo4.html" class="logo">
                                    <img src="assets/images/logo.png" width="111" height="44" alt="Porto Logo">
                                </a>
                            </div>
                            <!-- End .header-left -->

                            <div class="header-right w-lg-max">
                                <div
                                    class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
                                    <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                                    <form action="#" method="get">
                                        <div class="header-search-wrapper">
                                            <input type="search" class="form-control" name="q" id="q"
                                                placeholder="Search..." required>
                                            <div class="select-custom">
                                                <select id="cat" name="cat">
                                                    <option value="">All Categories</option>
                                                    <option value="4">Fashion</option>
                                                    <option value="12">- Women</option>
                                                    <option value="13">- Men</option>
                                                    <option value="66">- Jewellery</option>
                                                    <option value="67">- Kids Fashion</option>
                                                    <option value="5">Electronics</option>
                                                    <option value="21">- Smart TVs</option>
                                                    <option value="22">- Cameras</option>
                                                    <option value="63">- Games</option>
                                                    <option value="7">Home &amp; Garden</option>
                                                    <option value="11">Motors</option>
                                                    <option value="31">- Cars and Trucks</option>
                                                    <option value="32">- Motorcycles &amp; Powersports</option>
                                                    <option value="33">- Parts &amp; Accessories</option>
                                                    <option value="34">- Boats</option>
                                                    <option value="57">- Auto Tools &amp; Supplies</option>
                                                </select>
                                            </div>
                                            <!-- End .select-custom -->
                                            <button class="btn icon-magnifier p-0" type="submit"></button>
                                        </div>
                                        <!-- End .header-search-wrapper -->
                                    </form>
                                </div>
                                <!-- End .header-search -->

                                <div class="header-contact d-none d-lg-flex pl-4 pr-4">
                                    <img alt="phone" src="assets/images/phone.png" width="30" height="30"
                                        class="pb-1">
                                    <h6><span>Call us now</span><a href="tel:#" class="text-dark font1">+123 5678
                                            890</a></h6>
                                </div>

                                <a href="login.html" class="header-icon" title="login"><i class="icon-user-2"></i></a>

                                <a href="wishlist.html" class="header-icon" title="wishlist"><i
                                        class="icon-wishlist-2"></i></a>

                                <div class="dropdown cart-dropdown">
                                    <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        data-display="static">
                                        <i class="minicart-icon"></i>
                                        <span class="cart-count badge-circle">3</span>
                                    </a>

                                    <div class="cart-overlay"></div>

                                    <div class="dropdown-menu mobile-cart">
                                        <a href="#" title="Close (Esc)" class="btn-close">×</a>

                                        <div class="dropdownmenu-wrapper custom-scrollbar">
                                            <div class="dropdown-cart-header">Shopping Cart</div>
                                            <!-- End .dropdown-cart-header -->

                                            <div class="dropdown-cart-products">
                                                <div class="product">
                                                    <div class="product-details">
                                                        <h4 class="product-title">
                                                            <a href="product.html">Ultimate 3D Bluetooth Speaker</a>
                                                        </h4>

                                                        <span class="cart-product-info">
                                                            <span class="cart-product-qty">1</span> × $99.00
                                                        </span>
                                                    </div>
                                                    <!-- End .product-details -->

                                                    <figure class="product-image-container">
                                                        <a href="product.html" class="product-image">
                                                            <img src="assets/images/products/product-1.jpg" alt="product"
                                                                width="80" height="80">
                                                        </a>

                                                        <a href="#" class="btn-remove"
                                                            title="Remove Product"><span>×</span></a>
                                                    </figure>
                                                </div>
                                                <!-- End .product -->

                                                <div class="product">
                                                    <div class="product-details">
                                                        <h4 class="product-title">
                                                            <a href="product.html">Brown Women Casual HandBag</a>
                                                        </h4>

                                                        <span class="cart-product-info">
                                                            <span class="cart-product-qty">1</span> × $35.00
                                                        </span>
                                                    </div>
                                                    <!-- End .product-details -->

                                                    <figure class="product-image-container">
                                                        <a href="product.html" class="product-image">
                                                            <img src="assets/images/products/product-2.jpg" alt="product"
                                                                width="80" height="80">
                                                        </a>

                                                        <a href="#" class="btn-remove"
                                                            title="Remove Product"><span>×</span></a>
                                                    </figure>
                                                </div>
                                                <!-- End .product -->

                                                <div class="product">
                                                    <div class="product-details">
                                                        <h4 class="product-title">
                                                            <a href="product.html">Circled Ultimate 3D Speaker</a>
                                                        </h4>

                                                        <span class="cart-product-info">
                                                            <span class="cart-product-qty">1</span> × $35.00
                                                        </span>
                                                    </div>
                                                    <!-- End .product-details -->

                                                    <figure class="product-image-container">
                                                        <a href="product.html" class="product-image">
                                                            <img src="assets/images/products/product-3.jpg" alt="product"
                                                                width="80" height="80">
                                                        </a>
                                                        <a href="#" class="btn-remove"
                                                            title="Remove Product"><span>×</span></a>
                                                    </figure>
                                                </div>
                                                <!-- End .product -->
                                            </div>
                                            <!-- End .cart-product -->

                                            <div class="dropdown-cart-total">
                                                <span>SUBTOTAL:</span>

                                                <span class="cart-total-price float-right">$134.00</span>
                                            </div>
                                            <!-- End .dropdown-cart-total -->

                                            <div class="dropdown-cart-action">
                                                <a href="cart.html" class="btn btn-gray btn-block view-cart">View
                                                    Cart</a>
                                                <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                                            </div>
                                            <!-- End .dropdown-cart-total -->
                                        </div>
                                        <!-- End .dropdownmenu-wrapper -->
                                    </div>
                                    <!-- End .dropdown-menu -->
                                </div>
                                <!-- End .dropdown -->
                            </div>
                            <!-- End .header-right -->
                        </div>
                        <!-- End .container -->
                    </div>
                    <!-- End .header-middle -->

                    <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
                        <div class="container">
                            <nav class="main-nav w-100">
                                <ul class="menu">
                                    <li>
                                        <a href="demo4.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="category.html">Categories</a>
                                        <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <a href="#" class="nolink">VARIATION 1</a>
                                                    <ul class="submenu">
                                                        <li><a href="category.html">Fullwidth Banner</a></li>
                                                        <li><a href="category-banner-boxed-slider.html">Boxed Slider
                                                                Banner</a>
                                                        </li>
                                                        <li><a href="category-banner-boxed-image.html">Boxed Image
                                                                Banner</a>
                                                        </li>
                                                        <li><a href="category.html">Left Sidebar</a></li>
                                                        <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                                        <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                                                        <li><a href="category-horizontal-filter1.html">Horizontal
                                                                Filter1</a>
                                                        </li>
                                                        <li><a href="category-horizontal-filter2.html">Horizontal
                                                                Filter2</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a href="#" class="nolink">VARIATION 2</a>
                                                    <ul class="submenu">
                                                        <li><a href="category-list.html">List Types</a></li>
                                                        <li><a href="category-infinite-scroll.html">Ajax Infinite
                                                                Scroll</a>
                                                        </li>
                                                        <li><a href="category.html">3 Columns Products</a></li>
                                                        <li><a href="category-4col.html">4 Columns Products</a></li>
                                                        <li><a href="category-5col.html">5 Columns Products</a></li>
                                                        <li><a href="category-6col.html">6 Columns Products</a></li>
                                                        <li><a href="category-7col.html">7 Columns Products</a></li>
                                                        <li><a href="category-8col.html">8 Columns Products</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 p-0">
                                                    <div class="menu-banner">
                                                        <figure>
                                                            <img src="assets/images/menu-banner.jpg" width="192"
                                                                height="313" alt="Menu banner">
                                                        </figure>
                                                        <div class="banner-content">
                                                            <h4>
                                                                <span class="">UP TO</span><br />
                                                                <b class="">50%</b>
                                                                <i>OFF</i>
                                                            </h4>
                                                            <a href="category.html" class="btn btn-sm btn-dark">SHOP
                                                                NOW</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End .megamenu -->
                                    </li>
                                    <li>
                                        <a href="product.html">Products</a>
                                        <div class="megamenu megamenu-fixed-width">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <a href="#" class="nolink">PRODUCT PAGES</a>
                                                    <ul class="submenu">
                                                        <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                                        <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                                        <li><a href="product.html">SALE PRODUCT</a></li>
                                                        <li><a href="product.html">FEATURED & ON SALE</a></li>
                                                        <li><a href="product-custom-tab.html">WITH CUSTOM TAB</a></li>
                                                        <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                                        <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a>
                                                        </li>
                                                        <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                                                    </ul>
                                                </div>
                                                <!-- End .col-lg-4 -->

                                                <div class="col-lg-4">
                                                    <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                                    <ul class="submenu">
                                                        <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                                        <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                                        <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                                        <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                                        <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                                        <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a>
                                                        </li>
                                                        <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                                        <li><a href="#">BUILD YOUR OWN</a></li>
                                                    </ul>
                                                </div>
                                                <!-- End .col-lg-4 -->

                                                <div class="col-lg-4 p-0">
                                                    <div class="menu-banner menu-banner-2">
                                                        <figure>
                                                            <img src="assets/images/menu-banner-1.jpg" alt="Menu banner"
                                                                class="product-promo">
                                                        </figure>
                                                        <i>OFF</i>
                                                        <div class="banner-content">
                                                            <h4>
                                                                <span class="">UP TO</span><br />
                                                                <b class="">50%</b>
                                                            </h4>
                                                        </div>
                                                        <a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                                                    </div>
                                                </div>
                                                <!-- End .col-lg-4 -->
                                            </div>
                                            <!-- End .row -->
                                        </div>
                                        <!-- End .megamenu -->
                                    </li>
                                    <li class="active">
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="dashboard.html">Dashboard</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single.html">Blog Post</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="forgot-password.html">Forgot Password</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li class="float-right"><a href="https://1.envato.market/DdLk5" class="pl-5"
                                            target="_blank">Buy Porto!</a></li>
                                    <li class="float-right"><a href="#" class="pl-5">Special Offer!</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- End .container -->
                    </div>
                    <!-- End .header-bottom -->
                </header>
                <!-- End .header -->

                <main class="main main-test">
                    <div class="container checkout-container">
                        <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                            <li>
                                <a href="cart.html">Shopping Cart</a>
                            </li>
                            <li class="active">
                                <a href="checkout.html">Checkout</a>
                            </li>
                            <li class="disabled">
                                <a href="#">Order Complete</a>
                            </li>
                        </ul>

                        <div class="login-form-container">
                            <h4>Returning customer?
                                <button data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne" class="btn btn-link btn-toggle">Login</button>
                            </h4>

                            <div id="collapseOne" class="collapse">
                                <div class="login-section feature-box">
                                    <div class="feature-box-content">
                                        <form action="#" id="login-form">
                                            <p>
                                                If you have shopped with us before, please enter your details below. If you
                                                are a new customer, please proceed to the Billing & Shipping section.
                                            </p>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="mb-0 pb-1">Username or email <span
                                                                class="required">*</span></label>
                                                        <input type="email" class="form-control" required />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="mb-0 pb-1">Password <span
                                                                class="required">*</span></label>
                                                        <input type="password" class="form-control" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn">LOGIN</button>

                                            <div class="form-footer mb-1">
                                                <div class="custom-control custom-checkbox mb-0 mt-0">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="lost-password" />
                                                    <label class="custom-control-label mb-0" for="lost-password">Remember
                                                        me</label>
                                                </div>

                                                <a href="forgot-password.html" class="forget-password">Lost your
                                                    password?</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="checkout-discount">
                            <h4>Have a coupon?
                                <button data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                                    aria-controls="collapseOne" class="btn btn-link btn-toggle">ENTER YOUR CODE</button>
                            </h4>

                            <div id="collapseTwo" class="collapse">
                                <div class="feature-box">
                                    <div class="feature-box-content">
                                        <p>If you have a coupon code, please apply it below.</p>

                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm w-auto"
                                                    placeholder="Coupon code" required="" />
                                                <div class="input-group-append">
                                                    <button class="btn btn-sm mt-0" type="submit">
                                                        Apply Coupon
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-7">
                                <ul class="checkout-steps">
                                    <li>
                                        <h2 class="step-title">Billing details</h2>

                                        <form action="#" id="checkout-form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>First name
                                                            <abbr class="required" title="required">*</abbr>
                                                        </label>
                                                        <input type="text" class="form-control" required />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Last name
                                                            <abbr class="required" title="required">*</abbr></label>
                                                        <input type="text" class="form-control" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Company name (optional)</label>
                                                <input type="text" class="form-control" />
                                            </div>

                                            <div class="select-custom">
                                                <label>Country / Region
                                                    <abbr class="required" title="required">*</abbr></label>
                                                <select name="orderby" class="form-control">
                                                    <option value="" selected="selected">Vanuatu
                                                    </option>
                                                    <option value="1">Brunei</option>
                                                    <option value="2">Bulgaria</option>
                                                    <option value="3">Burkina Faso</option>
                                                    <option value="4">Burundi</option>
                                                    <option value="5">Cameroon</option>
                                                </select>
                                            </div>

                                            <div class="form-group mb-1 pb-2">
                                                <label>Street address
                                                    <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="form-control"
                                                    placeholder="House number and street name" required />
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Apartment, suite, unite, etc. (optional)" required />
                                            </div>

                                            <div class="form-group">
                                                <label>Town / City
                                                    <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="form-control" required />
                                            </div>

                                            <div class="select-custom">
                                                <label>State / County <abbr class="required"
                                                        title="required">*</abbr></label>
                                                <select name="orderby" class="form-control">
                                                    <option value="" selected="selected">NY</option>
                                                    <option value="1">Brunei</option>
                                                    <option value="2">Bulgaria</option>
                                                    <option value="3">Burkina Faso</option>
                                                    <option value="4">Burundi</option>
                                                    <option value="5">Cameroon</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Postcode / Zip
                                                    <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="form-control" required />
                                            </div>

                                            <div class="form-group">
                                                <label>Phone <abbr class="required" title="required">*</abbr></label>
                                                <input type="tel" class="form-control" required />
                                            </div>

                                            <div class="form-group">
                                                <label>Email address
                                                    <abbr class="required" title="required">*</abbr></label>
                                                <input type="email" class="form-control" required />
                                            </div>

                                            <div class="form-group mb-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="create-account" />
                                                    <label class="custom-control-label" data-toggle="collapse"
                                                        data-target="#collapseThree" aria-controls="collapseThree"
                                                        for="create-account">Create an
                                                        account?</label>
                                                </div>
                                            </div>

                                            <div id="collapseThree" class="collapse">
                                                <div class="form-group">
                                                    <label>Create account password
                                                        <abbr class="required" title="required">*</abbr></label>
                                                    <input type="password" placeholder="Password" class="form-control"
                                                        required />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox mt-0">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="different-shipping" />
                                                    <label class="custom-control-label" data-toggle="collapse"
                                                        data-target="#collapseFour" aria-controls="collapseFour"
                                                        for="different-shipping">Ship to a
                                                        different
                                                        address?</label>


                                                </div>
                                            </div>

                                            <div id="collapseFour" class="collapse">
                                                <div class="shipping-info">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>First name <abbr class="required"
                                                                        title="required">*</abbr></label>
                                                                <input type="text" class="form-control" required />
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Last name <abbr class="required"
                                                                        title="required">*</abbr></label>
                                                                <input type="text" class="form-control" required />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Company name (optional)</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="select-custom">
                                                        <label>Country / Region <span class="required">*</span></label>
                                                        <select name="orderby" class="form-control">
                                                            <option value="" selected="selected">Vanuatu</option>
                                                            <option value="1">Brunei</option>
                                                            <option value="2">Bulgaria</option>
                                                            <option value="3">Burkina Faso</option>
                                                            <option value="4">Burundi</option>
                                                            <option value="5">Cameroon</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group mb-1 pb-2">
                                                        <label>Street address <abbr class="required"
                                                                title="required">*</abbr></label>
                                                        <input type="text" class="form-control"
                                                            placeholder="House number and street name" required />
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Apartment, suite, unit, etc. (optional)"
                                                            required />
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Town / City <abbr class="required"
                                                                title="required">*</abbr></label>
                                                        <input type="text" class="form-control" required />
                                                    </div>

                                                    <div class="select-custom">
                                                        <label>State / County <abbr class="required"
                                                                title="required">*</abbr></label>
                                                        <select name="orderby" class="form-control">
                                                            <option value="" selected="selected">NY</option>
                                                            <option value="1">Brunei</option>
                                                            <option value="2">Bulgaria</option>
                                                            <option value="3">Burkina Faso</option>
                                                            <option value="4">Burundi</option>
                                                            <option value="5">Cameroon</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Postcode / ZIP <abbr class="required"
                                                                title="required">*</abbr></label>
                                                        <input type="text" class="form-control" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="order-comments">Order notes (optional)</label>
                                                <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." required></textarea>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <!-- End .col-lg-8 -->

                            <div class="col-lg-5">
                                <div class="order-summary">
                                    <h3>YOUR ORDER</h3>

                                    <table class="table table-mini-cart">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Product</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-col">
                                                    <h3 class="product-title">
                                                        Circled Ultimate 3D Speaker ×
                                                        <span class="product-qty">4</span>
                                                    </h3>
                                                </td>

                                                <td class="price-col">
                                                    <span>$1,040.00</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="product-col">
                                                    <h3 class="product-title">
                                                        Fashion Computer Bag ×
                                                        <span class="product-qty">2</span>
                                                    </h3>
                                                </td>

                                                <td class="price-col">
                                                    <span>$418.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <td>
                                                    <h4>Subtotal</h4>
                                                </td>

                                                <td class="price-col">
                                                    <span>$1,458.00</span>
                                                </td>
                                            </tr>
                                            <tr class="order-shipping">
                                                <td class="text-left" colspan="2">
                                                    <h4 class="m-b-sm">Shipping</h4>

                                                    <div class="form-group form-group-custom-control">
                                                        <div class="custom-control custom-radio d-flex">
                                                            <input type="radio" class="custom-control-input"
                                                                name="radio" checked />
                                                            <label class="custom-control-label">Local Pickup</label>
                                                        </div>
                                                        <!-- End .custom-checkbox -->
                                                    </div>
                                                    <!-- End .form-group -->

                                                    <div class="form-group form-group-custom-control mb-0">
                                                        <div class="custom-control custom-radio d-flex mb-0">
                                                            <input type="radio" name="radio"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label">Flat Rate</label>
                                                        </div>
                                                        <!-- End .custom-checkbox -->
                                                    </div>
                                                    <!-- End .form-group -->
                                                </td>

                                            </tr>

                                            <tr class="order-total">
                                                <td>
                                                    <h4>Total</h4>
                                                </td>
                                                <td>
                                                    <b class="total-price"><span>$1,603.80</span></b>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <div class="payment-methods">
                                        <h4 class="">Payment methods</h4>
                                        <div class="info-box with-icon p-0">
                                            <p>
                                                Sorry, it seems that there are no available payment methods for your state.
                                                Please contact us if you require assistance or wish to make alternate
                                                arrangements.
                                            </p>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-dark btn-place-order" form="checkout-form">
                                        Place order
                                    </button>
                                </div>
                                <!-- End .cart-summary -->
                            </div>
                            <!-- End .col-lg-4 -->
                        </div>
                        <!-- End .row -->
                    </div>
                    <!-- End .container -->
                </main>
                <!-- End .main -->

                <footer class="footer bg-dark">
                    <div class="footer-middle">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="widget">
                                        <h4 class="widget-title">Contact Info</h4>
                                        <ul class="contact-info">
                                            <li>
                                                <span class="contact-info-label">Address:</span>123 Street Name, City,
                                                England
                                            </li>
                                            <li>
                                                <span class="contact-info-label">Phone:</span><a href="tel:">(123)
                                                    456-7890</a>
                                            </li>
                                            <li>
                                                <span class="contact-info-label">Email:</span> <a
                                                    href="mailto:mail@example.com">mail@example.com</a>
                                            </li>
                                            <li>
                                                <span class="contact-info-label">Working Days/Hours:</span> Mon - Sun /
                                                9:00 AM - 8:00 PM
                                            </li>
                                        </ul>
                                        <div class="social-icons">
                                            <a href="#" class="social-icon social-facebook icon-facebook"
                                                target="_blank" title="Facebook"></a>
                                            <a href="#" class="social-icon social-twitter icon-twitter"
                                                target="_blank" title="Twitter"></a>
                                            <a href="#" class="social-icon social-instagram icon-instagram"
                                                target="_blank" title="Instagram"></a>
                                        </div>
                                        <!-- End .social-icons -->
                                    </div>
                                    <!-- End .widget -->
                                </div>
                                <!-- End .col-lg-3 -->

                                <div class="col-lg-3 col-sm-6">
                                    <div class="widget">
                                        <h4 class="widget-title">Customer Service</h4>

                                        <ul class="links">
                                            <li><a href="#">Help & FAQs</a></li>
                                            <li><a href="#">Order Tracking</a></li>
                                            <li><a href="#">Shipping & Delivery</a></li>
                                            <li><a href="#">Orders History</a></li>
                                            <li><a href="#">Advanced Search</a></li>
                                            <li><a href="dashboard.html">My Account</a></li>
                                            <li><a href="#">Careers</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="#">Corporate Sales</a></li>
                                            <li><a href="#">Privacy</a></li>
                                        </ul>
                                    </div>
                                    <!-- End .widget -->
                                </div>
                                <!-- End .col-lg-3 -->

                                <div class="col-lg-3 col-sm-6">
                                    <div class="widget">
                                        <h4 class="widget-title">Popular Tags</h4>

                                        <div class="tagcloud">
                                            <a href="#">Bag</a>
                                            <a href="#">Black</a>
                                            <a href="#">Blue</a>
                                            <a href="#">Clothes</a>
                                            <a href="#">Fashion</a>
                                            <a href="#">Hub</a>
                                            <a href="#">Shirt</a>
                                            <a href="#">Shoes</a>
                                            <a href="#">Skirt</a>
                                            <a href="#">Sports</a>
                                            <a href="#">Sweater</a>
                                        </div>
                                    </div>
                                    <!-- End .widget -->
                                </div>
                                <!-- End .col-lg-3 -->

                                <div class="col-lg-3 col-sm-6">
                                    <div class="widget widget-newsletter">
                                        <h4 class="widget-title">Subscribe newsletter</h4>
                                        <p>Get all the latest information on events, sales and offers. Sign up for
                                            newsletter:
                                        </p>
                                        <form action="#" class="mb-0">
                                            <input type="email" class="form-control m-b-3" placeholder="Email address"
                                                required>

                                            <input type="submit" class="btn btn-primary shadow-none" value="Subscribe">
                                        </form>
                                    </div>
                                    <!-- End .widget -->
                                </div>
                                <!-- End .col-lg-3 -->
                            </div>
                            <!-- End .row -->
                        </div>
                        <!-- End .container -->
                    </div>
                    <!-- End .footer-middle -->

                    <div class="container">
                        <div class="footer-bottom">
                            <div class="container d-sm-flex align-items-center">
                                <div class="footer-left">
                                    <span class="footer-copyright">© Porto eCommerce. 2021. All Rights Reserved</span>
                                </div>

                                <div class="footer-right ml-auto mt-1 mt-sm-0">
                                    <div class="payment-icons">
                                        <span class="payment-icon visa"
                                            style="background-image: url(assets/images/payments/payment-visa.svg)"></span>
                                        <span class="payment-icon paypal"
                                            style="background-image: url(assets/images/payments/payment-paypal.svg)"></span>
                                        <span class="payment-icon stripe"
                                            style="background-image: url(assets/images/payments/payment-stripe.png)"></span>
                                        <span class="payment-icon verisign"
                                            style="background-image:  url(assets/images/payments/payment-verisign.svg)"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .footer-bottom -->
                    </div>
                    <!-- End .container -->
                </footer>
                <!-- End .footer -->
            </div>
            <!-- End .page-wrapper -->

            <div class="loading-overlay">
                <div class="bounce-loader">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>

            <div class="mobile-menu-overlay"></div>
            <!-- End .mobil-menu-overlay -->

            <div class="mobile-menu-container">
                <div class="mobile-menu-wrapper">
                    <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li><a href="demo4.html">Home</a></li>
                            <li>
                                <a href="category.html">Categories</a>
                                <ul>
                                    <li><a href="category.html">Full Width Banner</a></li>
                                    <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                                    <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                                    <li><a href="category-sidebar-left.html">Left Sidebar</a></li>
                                    <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                    <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                                    <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                                    <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                                    <li><a href="#">List Types</a></li>
                                    <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span
                                                class="tip tip-new">New</span></a></li>
                                    <li><a href="category.html">3 Columns Products</a></li>
                                    <li><a href="category-4col.html">4 Columns Products</a></li>
                                    <li><a href="category-5col.html">5 Columns Products</a></li>
                                    <li><a href="category-6col.html">6 Columns Products</a></li>
                                    <li><a href="category-7col.html">7 Columns Products</a></li>
                                    <li><a href="category-8col.html">8 Columns Products</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="product.html">Products</a>
                                <ul>
                                    <li>
                                        <a href="#" class="nolink">PRODUCT PAGES</a>
                                        <ul>
                                            <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                            <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                            <li><a href="product.html">SALE PRODUCT</a></li>
                                            <li><a href="product.html">FEATURED & ON SALE</a></li>
                                            <li><a href="product-sticky-info.html">WIDTH CUSTOM TAB</a></li>
                                            <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                            <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
                                            <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                        <ul>
                                            <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                            <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                            <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                            <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                            <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                            <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
                                            <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                            <li><a href="#">BUILD YOUR OWN</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                                <ul>
                                    <li>
                                        <a href="wishlist.html">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="cart.html">Shopping Cart</a>
                                    </li>
                                    <li>
                                        <a href="checkout.html">Checkout</a>
                                    </li>
                                    <li>
                                        <a href="dashboard.html">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="forgot-password.html">Forgot Password</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li>
                                <a href="#">Elements</a>
                                <ul class="custom-scrollbar">
                                    <li><a href="element-accordions.html">Accordion</a></li>
                                    <li><a href="element-alerts.html">Alerts</a></li>
                                    <li><a href="element-animations.html">Animations</a></li>
                                    <li><a href="element-banners.html">Banners</a></li>
                                    <li><a href="element-buttons.html">Buttons</a></li>
                                    <li><a href="element-call-to-action.html">Call to Action</a></li>
                                    <li><a href="element-countdown.html">Count Down</a></li>
                                    <li><a href="element-counters.html">Counters</a></li>
                                    <li><a href="element-headings.html">Headings</a></li>
                                    <li><a href="element-icons.html">Icons</a></li>
                                    <li><a href="element-info-box.html">Info box</a></li>
                                    <li><a href="element-posts.html">Posts</a></li>
                                    <li><a href="element-products.html">Products</a></li>
                                    <li><a href="element-product-categories.html">Product Categories</a></li>
                                    <li><a href="element-tabs.html">Tabs</a></li>
                                    <li><a href="element-testimonial.html">Testimonials</a></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="mobile-menu mt-2 mb-2">
                            <li class="border-0">
                                <a href="#">
                                    Special Offer!
                                </a>
                            </li>
                            <li class="border-0">
                                <a href="https://1.envato.market/DdLk5" target="_blank">
                                    Buy Porto!
                                    <span class="tip tip-hot">Hot</span>
                                </a>
                            </li>
                        </ul>

                        <ul class="mobile-menu">
                            <li><a href="dashboard.html">My Account</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="wishlist.html">My Wishlist</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="login.html" class="login-link">Log In</a></li>
                        </ul>
                    </nav>
                    <!-- End .mobile-nav -->

                    <form class="search-wrapper mb-2" action="#">
                        <input type="text" class="form-control mb-0" placeholder="Search..." required />
                        <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
                    </form>

                    <div class="social-icons">
                        <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                        </a>
                        <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                        </a>
                        <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                        </a>
                    </div>
                </div>
                <!-- End .mobile-menu-wrapper -->
            </div>
            <!-- End .mobile-menu-container -->

            <div class="sticky-navbar">
                <div class="sticky-info">
                    <a href="demo4.html">
                        <i class="icon-home"></i>Home
                    </a>
                </div>
                <div class="sticky-info">
                    <a href="category.html" class="">
                        <i class="icon-bars"></i>Categories
                    </a>
                </div>
                <div class="sticky-info">
                    <a href="wishlist.html" class="">
                        <i class="icon-wishlist-2"></i>Wishlist
                    </a>
                </div>
                <div class="sticky-info">
                    <a href="my-account.html" class="">
                        <i class="icon-user-2"></i>Account
                    </a>
                </div>
                <div class="sticky-info">
                    <a href="cart.html" class="">
                        <i class="icon-shopping-cart position-relative">
                            <span class="cart-count badge-circle">3</span>
                        </i>Cart
                    </a>
                </div>
            </div>

        </div>

        <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

        <!-- Plugins JS File -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/plugins.min.js"></script>

        <!-- Main JS File -->
        <script src="assets/js/main.min.js"></script>
    </body>

@endsection
