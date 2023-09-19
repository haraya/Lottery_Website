<?php
    session_start();
?>

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
    <title>ROKAS</title>


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
    <?php require "header.php"; ?>
    <!-- ==========End Header-Section========== -->
    
    <!-- Register Area -->
    <?php require "form-registro.php"; ?>
    <!-- Register Area -->


    <!-- Login Area -->
    <?php require "form-login.php"; ?>
    <!-- Login Area -->
    
    <!-- ==========Header-Section========== -->

    <!-- ==========Breadcrumb-Section========== -->
    <section class="breadcrumb-area">
        <img class="contact" src="assets/images/contact-b-icon.png" alt="">
        <div class="container">
            <div class="content">
                <h2 class="title">
                    CONTACTO
                </h2>
                <ul class="breadcrumb-list extra-padding">
                    <li>
                        <a href="index.html">
                            Inicio
                        </a>
                    </li>

                    <li>
                        <a href="#">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Breadcrumb-Section========== -->

    <!-- ==========Contact-Section========== -->
    <section class="contact">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-7">
                    <div class="contact-box">
                        <h4 class="title">
                            Contáctanos
                        </h4>
                        <form action="#">
                            <div class="form-group">
                                <label>Te llamas</label>
                                <input type="text" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Su correo electrónico</label>
                                <input type="email" placeholder="  ">
                            </div>
                            <div class="form-group last">
                                <label>Su mensaje</label>
                                <textarea placeholder=" "></textarea>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Acepto recibir correos electrónicos, Boletines
                                    informativos y mensajes promocionales</label>
                            </div>
                            <button type="submit" class="custom-button1">Enviar Mensaje</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-area">
                        <div class="faq-block">
                            <h4 class="title">¿Tienes preguntas?</h4>
                            <p>
                                Si tiene alguna pregunta o consulta, Nuestro 
                                útil equipo de soporte será Más que feliz de ayudarle.
                            </p>
                            <a href="#">
                                Leer F.A.Q <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="contact-info">
                            <div class="single-info">
                                <img src="assets/images/eicom.png" alt="">
                                <div class="content">
                                    <h4>Envíenos un correo electrónicoUs</h4>
                                    <p>info@ROKKAS.com</p>
                                </div>
                            </div>
                            <div class="single-info">
                                <img src="assets/images/picon.png" alt="">
                                <div class="content">
                                    <h4>Llámanos</h4>
                                    <p>1111111111111</p>
                                    <p>111111111111</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Contact-Section========== -->
 
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
                                        <a href="#">Acerca de</a>
                                    </li>
                                    <li>
                                        <a href="#">Preguntas Frecuentes</a>
                                    </li>
                                    <li>
                                        <a href="#">Contacto </a>
                                    </li>
                                    <li>
                                        <a href="#">Condiciones del servicio</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacidad</a>
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
                            <a href="#">ROKAS</a>
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