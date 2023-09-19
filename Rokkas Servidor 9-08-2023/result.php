<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/bootstrap-popover-x.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Fantra - Online Lotto & Lottery HTML Template</title>



</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->

    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="top-header">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-area-inner">
                            <a href="index.html" class="logo">
                                <img src="assets/images/logo.png" alt="">
                            </a>
                            <div class="right-area">
                                <div class="log-reg-area">
                                    <a href="#" class="custom-button1" data-toggle="modal"
                                        data-target="#registerModal">Register</a>
                                    <a href="#" class="custom-button2" data-toggle="modal" data-target="#loginModal">Log
                                        In</a>
                                </div>
                                <div class="cart-area">
                                    <div class="icon">
                                        <img src="assets/images/cart.png" alt="">
                                        <span>06</span>
                                    </div>
                                    <div class="amount">
                                        <h4 class="mony">$ 23.60</h4>
                                        <p>To checkout</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-section">
            <div class="container">
                <div class="header-wrapper">
                    <ul class="menu">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="single-lottery.html">Lottery</a>
                        </li>
                        <li>
                            <a href="result.html" class="active">Results</a>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="faq.html">Faq</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                            <ul class="submenu">
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <div class="right-tools">
                        <select class="select-bar">
                            <option value="">BTC</option>
                            <option value="">BDT</option>
                            <option value="">USD</option>
                        </select>
                        <select class="select-bar">
                            <option value="">EN</option>
                            <option value="">IN</option>
                            <option value="">BN</option>
                        </select>
                    </div>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Register Area -->
    <div class="modal fade log-reg-modal-wrapper" id="registerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                    <div class="log-reg-inner">
                        <h2 class="title">
                            Create an Account
                        </h2>
                        <div class="main-content">
                            <form action="#">
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="email" class="my-form-control" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="my-form-control" placeholder="Enter Your Password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="text" class="my-form-control"
                                        placeholder="Enter Your Confirm Password">
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">
                                        I agree to the <a href="#">Terms, Privacy Policy and Fees</a>
                                    </label>
                                </div>
                                <div class="button-wrapper">
                                    <button type="submit" class="custom-button2">Register Now</button>
                                    <p class="or-signup">
                                        Already have an account? <a href="#" data-toggle="modal"
                                            data-target="#loginModal">
                                            Login
                                        </a>
                                    </p>
                                </div>
                                <div class="or">
                                    <p>OR</p>
                                </div>
                                <div class="socials">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-google"></i>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Area -->

    <!-- Login Area -->
    <div class="modal fade log-reg-modal-wrapper log" id="loginModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                    <div class="log-reg-inner">
                        <h2 class="title">
                            Welcome to Fantra
                        </h2>
                        <div class="main-content">
                            <form action="#">
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="email" class="my-form-control" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="my-form-control" placeholder="Enter Your Password">
                                </div>
                                <p class="f-pass">
                                    Forgot your password? <a href="#">recover password</a>
                                </p>
                                <div class="button-wrapper">
                                    <button type="submit" class="custom-button2">Sign In</button>
                                </div>
                                <div class="or log">
                                    <p>OR</p>
                                </div>
                                <div class="or-content">
                                    <p>Sign up with your email</p>
                                    <a href="#" class="or-btn"><img src="assets/images/google.png" alt=""> Sign Up with
                                        Google</a>
                                    <p class="or-signup">
                                        Don't have an account? <a href="#" data-toggle="modal"
                                            data-target="#registerModal">
                                            Sign up here
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Area -->
    <!-- ==========Header-Section========== -->

    <!-- ==========Breadcrumb-Section========== -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="content">
                <h2 class="title">
                    Results
                </h2>
                <ul class="breadcrumb-list extra-padding">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#">Results</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Breadcrumb-Section========== -->

    <!-- ==========Results-Section========== -->
    <section class="results">
        <div class="top-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="image">
                            <img src="assets/images/result.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="check-number result-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="check-box">
                            <h4 class="title">1. Select a Game</h4>
                            <div class="form-area">
                                <select>
                                    <option value="#">Power Ball</option>
                                    <option value="#">Megamillions</option>
                                    <option value="#">Euromillions</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="check-box">
                            <h4 class="title">2. Pick a Date</h4>
                            <div class="form-area">
                                <input type="date">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="check-box">
                            <h4 class="title">3. Enter Your Number</h4>
                            <div class="form-area input-round-wrapper">
                                <input type="text" class="input-round">
                                <input type="text" class="input-round">
                                <input type="text" class="input-round">
                                <input type="text" class="input-round">
                                <input type="text" class="input-round">
                                <input type="text" class="input-round">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lottery-result result-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="result-list">
                            <div class="single-list">
                                <div class="light-area">
                                    <div class="light-area-top">
                                        <div class="left">
                                            <img src="assets/images/d1.png" alt="">
                                            <h4>Powerball</h4>
                                        </div>
                                        <div class="right">
                                            <span>Draw took place on</span>
                                            <h6>Saturday April 20, 2020</h6>
                                        </div>
                                    </div>
                                    <div class="light-area-bottom">
                                        <div class="left">
                                            <p>Winning Numbers:</p>
                                            <div class="numbers">
                                                <span>11</span>
                                                <span>88</span>
                                                <span>23</span>
                                                <span>9</span>
                                                <span>19</span>
                                                <span>26</span>
                                                <span>87</span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span>Est. Jackpot</span>
                                            <h6>$116 M Win BTC</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="color-area">
                                    <div class="top">
                                        <span>Next Draw</span>
                                        <h6>Wed, Oct 28, 2020</h6>
                                    </div>
                                    <div class="bottom">
                                        <span>Est. Jackpot </span>
                                        <h6>$116 M Win BTC</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-list">
                                <div class="light-area">
                                    <div class="light-area-top">
                                        <div class="left">
                                            <img src="assets/images/d2.png" alt="">
                                            <h4>Megamillions</h4>
                                        </div>
                                        <div class="right">
                                            <span>Draw took place on</span>
                                            <h6>Saturday April 20, 2020</h6>
                                        </div>
                                    </div>
                                    <div class="light-area-bottom">
                                        <div class="left">
                                            <p>Winning Numbers:</p>
                                            <div class="numbers">
                                                <span>11</span>
                                                <span>88</span>
                                                <span>23</span>
                                                <span>9</span>
                                                <span>19</span>
                                                <span>26</span>
                                                <span>87</span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span>Est. Jackpot</span>
                                            <h6>$116 M Win BTC</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="color-area">
                                    <div class="top">
                                        <span>Next Draw</span>
                                        <h6>Wed, Oct 28, 2020</h6>
                                    </div>
                                    <div class="bottom">
                                        <span>Est. Jackpot </span>
                                        <h6>$116 M Win BTC</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-list">
                                <div class="light-area">
                                    <div class="light-area-top">
                                        <div class="left">
                                            <img src="assets/images/d3.png" alt="">
                                            <h4>Euromillions</h4>
                                        </div>
                                        <div class="right">
                                            <span>Draw took place on</span>
                                            <h6>Saturday April 20, 2020</h6>
                                        </div>
                                    </div>
                                    <div class="light-area-bottom">
                                        <div class="left">
                                            <p>Winning Numbers:</p>
                                            <div class="numbers">
                                                <span>11</span>
                                                <span>88</span>
                                                <span>23</span>
                                                <span>9</span>
                                                <span>19</span>
                                                <span>26</span>
                                                <span>87</span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span>Est. Jackpot</span>
                                            <h6>$116 M Win BTC</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="color-area">
                                    <div class="top">
                                        <span>Next Draw</span>
                                        <h6>Wed, Oct 28, 2020</h6>
                                    </div>
                                    <div class="bottom">
                                        <span>Est. Jackpot </span>
                                        <h6>$116 M Win BTC</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a class="view-all" href="#">Load more </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Results-Section========== -->

    <!-- ==========Newslater-Section========== -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-links">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-top-area">
                            <div class="left">
                                <a href="#">
                                    <img src="assets/images/app_store_btn.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="assets/images/goole_play_btn.png" alt="">
                                </a>
                            </div>
                            <div class="right">
                                <ul class="links">
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQs</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms of Service</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <hr class="hr2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="copyr-text">
                            <span>
                                Copyright © 2020.All Rights Reserved By
                            </span>
                            <a href="#">Fantra</a>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <ul class="footer-social-links">
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==========Newslater-Section========== -->
    <!-- All js link starts hear -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/bootstrap-popover-x.min.js"></script>
    <script src="assets/js/amd.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>