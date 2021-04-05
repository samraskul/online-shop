<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Shop</title>
</head>

<body>
    <div class="main-categories-mobile display-on-mobile ">
        <div class="three-line-menu" id="three-line-menu"><span></span><span></span><span></span></div>
    </div>
    <!-- mobile menu start -->
    <div id="mobile-menu" class="mobile-menu-hidden">
        <div id="mobile-menu-left" class="mobile-menu-animation">
            <ul>
                <li class="mobile-menu-title">Categories</li>
                <ul class="mobile-menu-child">
                    <a href="#">
                        <li>Mobile</li>
                    </a>
                    <a href="#">
                        <li>Smartphones Accessories</li>
                    </a>
                    <a href="#">
                        <li>Electronics</li>
                    </a>
                    <a href="#">
                        <li>Computers & Networking</li>
                    </a>
                    <a href="#">
                        <li>Car Accessories</li>
                    </a>
                    <a href="#">
                        <li>Lights & Lighting</li>
                    </a>
                    <a href="#">
                        <li>Home & Office</li>
                    </a>
                    <a href="#">
                        <li>Sports & Outdoors</li>
                    </a>
                    <a href="#">
                        <li>Apparel & Accessories</li>
                    </a>
                    <a href="#">
                        <li>Intimate Apparel</li>
                    </a>
                    <a href="#">
                        <li>Health & Beauty</li>
                    </a>
                    <a href="#">
                        <li>Toys & Hobbies</li>
                    </a>
                    <a href="#">
                        <li>Cameras & Camcorders</li>
                    </a>
                    <a href="#">
                        <li>Jewelry & Watches</li>
                    </a>
                    <a href="#">
                        <li>All Categories</li>
                    </a>
                </ul>
                <li class="mobile-menu-title">Pages</li>
                <ul class="mobile-menu-child">
                    <a href="">
                        <li>Home</li>
                    </a>
                    <a href="">
                        <li>All products</li>
                    </a>
                    <a href="">
                        <li>Blog</li>
                    </a>
                    <a href="">
                        <li>About us</li>
                    </a>
                    <a href="">
                        <li>Contact us</li>
                    </a>
                </ul>
            </ul>
        </div>
        <div id="mobile-menu-right">
        </div>
    </div>
    <!-- mobile menu end -->

    <div class="container">

        <div class="container-row border-bottom">
            <div class="top-first-menu">
                <div class="top-first-menu-left">
                    <div class="top-first-menu-left-phone">
                        <li class="fas fa-phone theme-color"></li> Hotline: (+800) 1234 5678 90
                    </div>
                    <div class="">
                        <li class="fas fa-envelope theme-color"></li> Email: contact@shoppystore.com
                    </div>
                </div>
                <div class="top-first-menu-right">
                    <div class="top-first-menu-right-dropdown link">
                        <span class="">My Account <span class="arrow-down"></span></span>
                        <div class="top-first-menu-right-dropdown-content">
                            <div><a href="/login">Login</a></div>
                            <div><a href="/register">Register</a></div>
                        </div>
                        <span class="top-first-menu-right-small-space"> | </span>
                    </div>
                    <div class="top-first-menu-right-dropdown link">
                        <span class=""> USD <span class="arrow-down"></span></span>
                        <div class="top-first-menu-right-dropdown-content">
                            <div><a href="/change_currency/eur">EUR</a></div>
                            <div><a href="/change_currency/usd">USD</a></div>
                        </div>
                        <span class="top-first-menu-right-small-space"> | </span>
                    </div>
                    <div class="top-first-menu-right-dropdown link">
                        <span class=""><span>Flag</span> English <span class="arrow-down"></span></span>
                        <div class="top-first-menu-right-dropdown-content">
                            <div><a href="/change_language/en"><span>Flag</span> English </a></div>
                            <div><a href="/change_language/sp"><span>Flag</span> Spanish </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-row top-menu-background-color">
            <div class="top-second-menu">
                <div>
                    <img data-placeholder="no" src="https://demo.smartaddons.com/templates/joomla3/sj-shoppystore/templates/sj_shoppystore/images/styling/red/logo.png" alt="sj shoppystore" style="width:140px;height:57px;">
                </div>
                <ul class="top-second-menu-main-items">
                    <li><a href="/">home</a></li>
                    <li><a href="#">all products</a></li>
                    <li><a href="/blog">blog</a></li>
                    <li><a href="/about-us">about us</a></li>
                    <li><a href="/contact-us">contact us</a></li>
                </ul>
                <div class="top-second-menu-cart">
                    <div class="top-second-menu-cart-outer">
                        <div class="top-second-menu-cart-inner">
                            <li class="fa fa-shopping-cart theme-color"></li>
                            <!-- <span>0</span> ITEMS - <span>0.00</span> <span>$</span> -->
                            <span>0</span> items - <span>50.000.000</span>-<span>$</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="container-row top-menu-background-color">
            <div class="top-third-menu">
                <!-- free space for next block move to this place -->
            </div>
        </div>



        @yield('content')



        <!-- footer first start-->
<div class="container-row footer-first-subscription-background-color">
    <div class="footer-first-subscription">
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Enter your email address..." required>
            <input type="submit" value="Subscribe">
        </form>
        <div class="footer-first-subscription-text">
            <div class="footer-first-subscription-text-title">Sign up and Save!</div>
            <div>Receive email-only deals, special offers & product exclusives</div>
        </div>
    </div>
</div>
<!-- footer first end-->

<!-- footer second start-->
<div class="container-row footer-second-background-color">
    <div class="footer-second-links">

        <div class="footer-second-links-column">
            <div class="footer-second-links-column-title">My Account</div>
            <li><a href="#"><i class="fa fa-caret-right"></i> My Orders</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> My Credit Slips</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> My Addresses</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> My Personal Info</a></li>
        </div>

        <div class="footer-second-links-column">
            <div class="footer-second-links-column-title">Information</div>
            <li><a href="#"><i class="fa fa-caret-right"></i> Gift Services</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Best Seller</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> New Products</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Delivery</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Contact Us</a></li>
        </div>
        <div class="footer-second-links-column">
            <div class="footer-second-links-column-title">Corporate</div>
            <li><a href="#"><i class="fa fa-caret-right"></i> About Us</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Customer Service</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Company</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Investor Relations</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Typography</a></li>
        </div>
        <div class="footer-second-links-column">
            <div class="footer-second-links-column-title">Why Choose Us</div>
            <li><a href="#"><i class="fa fa-caret-right"></i> About Us</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Blog</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Services</a></li>
        </div>
        <div class="footer-second-links-column">
            <div class="footer-second-links-column-title">Contact Us</div>
            <div>
                <p class="footer-second-links-column-address">
                    Maecenas euismod felis et purus consectetur, quis fermentum velition. Aenean egestas quis
                    turpis vehicula.
                </p>
                <div><i class="fa fa-location-arrow theme-color"></i>
                    No 304, Sky Tower, New York, USA
                </div>
                <div><i class="fa fa-phone theme-color"></i> (+800) 1234 5678 90</div>
                <div><i class="fa fa-envelope theme-color"></i> contact@shoppystore.com</div>
            </div>

        </div>

    </div>
</div>
<!-- footer second end-->

<!-- footer third facilities start-->
<div class="container-row footer-third-facilities-background-color">
    <div class="footer-third-facilities">
        <div>
            <div class="footer-third-facilities-icon">icon1</div>
            <div class="footer-third-facilities-title">High Quality</div>
            <div class="footer-third-facilities-text">Nullam sed sollicitudin mauris velit id venenatis morbi
            </div>
        </div>
        <div>
            <div class="footer-third-facilities-icon">icon2</div>
            <div class="footer-third-facilities-title">Awesome Support</div>
            <div class="footer-third-facilities-text">Nullam sed sollicitudin mauris velit id venenatis morbi
            </div>
        </div>
        <div>
            <div class="footer-third-facilities-icon">icon3</div>
            <div class="footer-third-facilities-title">Really Fast Deliveries</div>
            <div class="footer-third-facilities-text">Nullam sed sollicitudin mauris velit id venenatis morbi
            </div>
        </div>
        <div>
            <div class="footer-third-facilities-icon">icon4</div>
            <div class="footer-third-facilities-title">14 - Day Returns</div>
            <div class="footer-third-facilities-text">Nullam sed sollicitudin mauris velit id venenatis morbi
            </div>
        </div>
        <div>
            <div class="footer-third-facilities-icon">icon5</div>
            <div class="footer-third-facilities-title">Secure Checkout</div>
            <div class="footer-third-facilities-text">Nullam sed sollicitudin mauris velit id venenatis morbi
            </div>
        </div>
    </div>
</div>
<!-- footer third facilities end-->

<!-- footer forth copyright start -->
<div class="container-row footer-forth-copyright-background-color">
    <div class="footer-forth-copyright-content">
        <div class="footer-forth-copyright-content-title">
            Copyright © 2021 Sam Raskul. All Rights Reserved . Designed by Sam Raskul
        </div>
        <div class="footer-forth-copyright-content-text">
            Email me at samraskul@gmail.com
        </div>
    </div>
</div>
<!-- footer forth copyright end -->

</div>

<!-- fix cards width -->
<script src="/assets/js/script-fix-width.js"></script>

<!-- <script src="/assets/js/dragscroll.js"></script> -->
<script src="/assets/js/scroll-booster.js"></script>
<script>
    let cardItemContainers = document.querySelectorAll(".card-item-container");

    cardItemContainers.forEach(container => {
        let p = container.parentElement;

        new ScrollBooster({
            viewport: p,
            content: container,
            scrollMode: 'native',
            direction: 'horizontal'
        });
    });
</script>

<!-- TODO:add script for search bottom to submit the form  -->
<script src="/assets/js/script.js"></script>

</body>

</html>