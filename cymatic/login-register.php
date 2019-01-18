<?php 
session_start();
if(isset($_SESSION['email'])){
    echo "<script type='text/javascript'>location.href = './home.php';</script>";
    die();
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ARPHF - APPLY NOW</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./main2.jpeg">
    
    <!-- CSS
    ============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icons.min.css">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style type="text/css">
     .default-btn{
        background-color: #D7387A;
    }
    .footer-bottom{
        background-color: #D7387A;
    }
    </style>
</head>

<body>
<header class="header-area">
    <div class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="logo" style="margin-left: 20px;">
                        <a href="index.html" >
                            <img alt="" src="main2.jpeg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-8">
                    <div class="menu-cart-wrap" style="margin-top: 25px;">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="index.html"> HOME </a>
                                        <ul class="submenu">
                                            <li><a href="index.html">home version 1</a></li>
                                            <li><a href="index-2.html">home version 2</a></li>
                                            <li><a href="index-3.html">home version 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html"> ABOUT  </a></li>
                                    <!--<li class="mega-menu-position top-hover"><a href="shop.html"> SHOP <i class="fa fa-angle-down"></i> </a>
                                        <ul class="mega-menu">
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Categories 01</a></li>
                                                    <li><a href="shop.html">bag</a></li>
                                                    <li><a href="shop.html">Pen</a></li>
                                                    <li><a href="shop.html">Erasers</a></li>
                                                    <li><a href="shop.html">Glue sticks</a></li>
                                                    <li><a href="shop.html">Lunchbox </a></li>
                                                    <li><a href="shop.html">Pencil box </a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Categories 02</a></li>
                                                    <li><a href="shop.html">bag</a></li>
                                                    <li><a href="shop.html">Pen</a></li>
                                                    <li><a href="shop.html">Erasers</a></li>
                                                    <li><a href="shop.html">Glue sticks</a></li>
                                                    <li><a href="shop.html">Lunchbox </a></li>
                                                    <li><a href="shop.html">Pencil box </a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Categories 03</a></li>
                                                    <li><a href="shop.html">bag</a></li>
                                                    <li><a href="shop.html">Pen</a></li>
                                                    <li><a href="shop.html">Erasers</a></li>
                                                    <li><a href="shop.html">Glue sticks</a></li>
                                                    <li><a href="shop.html">Lunchbox </a></li>
                                                    <li><a href="shop.html">Pencil box </a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Categories 04</a></li>
                                                    <li><a href="shop.html">bag</a></li>
                                                    <li><a href="shop.html">Pen</a></li>
                                                    <li><a href="shop.html">Erasers</a></li>
                                                    <li><a href="shop.html">Glue sticks</a></li>
                                                    <li><a href="shop.html">Lunchbox </a></li>
                                                    <li><a href="shop.html">Pencil box </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>-->
                                    <!--<li><a href="#"> PAGES <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="course.html">course page</a></li>
                                            <li><a href="event.html">event page</a></li>
                                            <li><a href="shop.html">shop page</a></li>
                                            <li><a href="course-details.html">course details</a></li>
                                            <li><a href="event-details.html">event details</a></li>
                                            <li><a href="single-product.html">single product</a></li>
                                            <li><a href="cart.html">cart page</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="login-register.html">login / register</a></li>
                                        </ul>
                                    </li>-->
                                    <li><a href="./login-register.php"> APPLY NOW</a></li>
                                    <li><a href="faq.html"> FAQ </a>
                                        
                                    </li>
                                    <li><a href="contact.html"> CONTACT </a></li>
                                </ul>
                            </nav>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="index.html">HOME</a>
                            </li>
                            <li><a href="about-us.html">About</a></li>
                            <li><a href="shop.html">Shop</a>
                                <ul>
                                    <li><a href="#">Categories 01</a>
                                        <ul>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 02</a>
                                        <ul>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 03</a>
                                        <ul>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Categories 04</a>
                                        <ul>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="course.html">course page</a></li>
                                    <li><a href="event.html">event page</a></li>
                                    <li><a href="shop.html">shop page</a></li>
                                    <li><a href="course-details.html">course details</a></li>
                                    <li><a href="event-details.html">event details</a></li>
                                    <li><a href="single-product.html">single product</a></li>
                                    <li><a href="cart.html">cart page</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="login-register.html">login / register</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="faq.html">FAQ</a>
                                
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper" style="margin-top: 20px;">
                    <div class="login-register-tab-list nav">
                        <a data-toggle="tab" href="#lg2">
                            <h4 > Register </h4>
                        </a>
                        <a data-toggle="tab" href="#lg1">
                            <h4 > Login </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <h3>Applicant Login</h3><br>
                                    <form action="login.php" method="post">
                                        <label>Email</label>
                                        <input type="text" name="email" placeholder="Email">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Password">
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox">
                                                <label>Remember me</label>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <button class="default-btn" type="submit"><span>Login</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="enteruser.php" method="post">
                                        <label>Email</label>
                                        <input type="text" name="primaryemail" placeholder="Email" required>
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Password"required>
                                        <label>First Name</label>
                                        <input type="text" name="firstname" placeholder="First Name"required>
                                        <label>Last Name</label>
                                        <input type="text" name="surname" placeholder="Last Name"required>
                                        <label>Mobile Number</label>
                                        <input type="number" name="mobile" placeholder="Contact Number"required>
                                        <button class="default-btn" type="submit"><span>Register</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><br>
<footer class="footer-area">
    <div class="footer-bottom pt-15 pb-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="copyright">
                        <p>
                            Copyright ©
                            <a href="#">Aaroogya</a>
                            . All Right Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="footer-menu-social">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Privecy & Policy</a></li>
                                <li><a href="#">Terms & Conditions of Use</a></li>
                            </ul>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a class="facebook" href="https://www.facebook.com/aaroogya/"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="youtube" href="https://www.youtube.com/channel/UC7AnTYXhdWETOWKyjwq0FmA"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="twitter" href=""><i class="fa fa-twitter"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>













<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>