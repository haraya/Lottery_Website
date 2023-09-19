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
                            <a href="result.html">Results</a>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="faq.html" class="active">Faq</a>
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
                    FAQ
                </h2>
                <ul class="breadcrumb-list extra-padding">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Breadcrumb-Section========== -->

    <!-- ==========faq-Section========== -->
    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-box">
                        <div class="section-header">
                            <h2 class="title ep">
                                Asked Questions
                            </h2>
                            <p class="text">
                                Do not hesitate to send us an email if you can't find what you're looking for.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="faq-menu">
                                    <ul>
                                        <li>
                                            <a href="#aboutfaq" class="active">
                                                <i class="fas fa-chevron-right"></i> About Fantra
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#bankingfaq">
                                                <i class="fas fa-chevron-right"></i> Banking
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#winingfaq">
                                                <i class="fas fa-chevron-right"></i> Wining
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#securityfaq">
                                                <i class="fas fa-chevron-right"></i> Security
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="faq-collaps-box">
                                    <h4 class="title">About Fantra</h4>
                                    <div class="accordion" id="aboutfaq">
                                        <div class="mycard">
                                            <div class="mycard-header">
                                                <h2 class="mb-0">
                                                    <button class="text-left" data-toggle="collapse" data-target="#one"
                                                        aria-expanded="true" aria-controls="one">
                                                        What is Fantra.com ?
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="one" class="collapse show" data-parent="#aboutfaq">
                                                <div class="mycard-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mycard">
                                            <div class="mycard-header">
                                                <h2 class="mb-0">
                                                    <button class="text-left collapsed" data-toggle="collapse"
                                                        data-target="#two" aria-expanded="false" aria-controls="two">
                                                        How do I create an account?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="two" class="collapse" data-parent="#aboutfaq">
                                                <div class="mycard-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mycard">
                                            <div class="mycard-header">
                                                <h2 class="mb-0">
                                                    <button class="text-left collapsed" data-toggle="collapse"
                                                        data-target="#three" aria-expanded="false"
                                                        aria-controls="three">
                                                        Can I play any lottery on the site?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="three" class="collapse" data-parent="#aboutfaq">
                                                <div class="mycard-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-collaps-box">
                                    <h4 class="title">Banking</h4>
                                    <div class="accordion" id="bankingfaq">
                                        <div class="mycard">
                                            <div class="mycard-header">
                                                <h2 class="mb-0">
                                                    <button class="text-left" data-toggle="collapse" data-target="#four"
                                                        aria-expanded="true" aria-controls="four">
                                                        What is Fantra.com ?
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="four" class="collapse show" data-parent="#bankingfaq">
                                                <div class="mycard-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                    accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute, non
                                                    cupidatat
                                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mycard">
                                            <div class="mycard-header">
                                                <h2 class="mb-0">
                                                    <button class="text-left collapsed" data-toggle="collapse"
                                                        data-target="#five" aria-expanded="false" aria-controls="five">
                                                        How do I create an account?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="five" class="collapse" data-parent="#bankingfaq">
                                                <div class="mycard-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                    accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute, non
                                                    cupidatat
                                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mycard">
                                            <div class="mycard-header">
                                                <h2 class="mb-0">
                                                    <button class="text-left collapsed" data-toggle="collapse"
                                                        data-target="#six" aria-expanded="false" aria-controls="six">
                                                        Can I play any lottery on the site?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="six" class="collapse" data-parent="#bankingfaq">
                                                <div class="mycard-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                    accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute, non
                                                    cupidatat
                                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-collaps-box">
                                    <h4 class="title">Winning</h4>
                                    <div class="accordion" id="winingfaq">
                                        <div class="mycard">
                                            <div class="mycard-header">
                                                <h2 class="mb-0">
                                                    <button class="text-left" data-toggle="collapse"
                                                        data-target="#seven" aria-expanded="true" aria-controls="seven">
                                                        What is Fantra.com ?
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="seven" class="collapse show" data-parent="#winingfaq">
                                                <div class="mycard-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                    accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute, non
                                                    cupidatat
                                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mycard">
                                            <div class="mycard-header">
                                                <h2 class="mb-0">
                                                    <button class="text-left collapsed" data-toggle="collapse"
                                                        data-target="#eight" aria-expanded="false"
                                                        aria-controls="eight">
                                                        How do I create an account?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="eight" class="collapse" data-parent="#winingfaq">
                                                <div class="mycard-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                    accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute, non
                                                    cupidatat
                                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mycard">
                                            <div class="mycard-header">
                                                <h2 class="mb-0">
                                                    <button class="text-left collapsed" data-toggle="collapse"
                                                        data-target="#nine" aria-expanded="false" aria-controls="nine">
                                                        Can I play any lottery on the site?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="nine" class="collapse" data-parent="#winingfaq">
                                                <div class="mycard-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                    accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute, non
                                                    cupidatat
                                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-collaps-box">
                                    <h4 class="title">Security</h4>
                                    <div class="accordion" id="securityfaq">
                                        <div class="mycard">
                                            <div class="mycard-header">
                                                <h2 class="mb-0">
                                                    <button class="text-left" data-toggle="collapse" data-target="#ten"
                                                        aria-expanded="true" aria-controls="ten">
                                                        What is Fantra.com ?
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="ten" class="collapse show" data-parent="#securityfaq">
                                                <div class="mycard-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                    accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute, non
                                                    cupidatat
                                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mycard">
                                            <div class="mycard-header">
                                                <h2 class="mb-0">
                                                    <button class="text-left collapsed" data-toggle="collapse"
                                                        data-target="#eleven" aria-expanded="false"
                                                        aria-controls="eleven">
                                                        How do I create an account?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="eleven" class="collapse" data-parent="#securityfaq">
                                                <div class="mycard-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                    accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute, non
                                                    cupidatat
                                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mycard">
                                            <div class="mycard-header">
                                                <h2 class="mb-0">
                                                    <button class="text-left collapsed" data-toggle="collapse"
                                                        data-target="#twelve" aria-expanded="false"
                                                        aria-controls="twelve">
                                                        Can I play any lottery on the site?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="twelve" class="collapse" data-parent="#securityfaq">
                                                <div class="mycard-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                    accusamus
                                                    terry richardson ad squid. 3 wolf moon officia aute, non
                                                    cupidatat
                                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========faq-Section========== -->

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