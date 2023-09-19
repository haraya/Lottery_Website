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

    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="banner-subtitle">Lotería Exclusiva</p>
                    <h1 class="banner-title">
                        Mega ticatrible
                    </h1>
                    <p class="text">¡Ponte en marcha para tener la oportunidad de ganar en este electrizante juego instantáneo!</p>
                    <a href="single-lottery.html" class="custom-button2">Empieza a Jugar ahora</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Draw-Section========== -->
    <section class="draw-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="draw-slider owl-carousel">
                        <div class="item">
                            <div class="single-draw">
                                <img class="overlay" src="assets/images/overlaymask1.png" alt="">
                                <div class="icon">
                                    <img src="assets/images/d1.png" alt="">
                                </div>
                                <h4>
                                   PAGA 95
                                </h4>
                                <a href="#" class="custom-button1">Juega ahora</a>
                                <div class="next-draw">
                                    <span class="text">Próximo sorteo:</span>
                                    <div class="time">
                                        <img src="assets/images/time.png" alt="">
                                        <h6 class="time-countdown" data-countdown="01/01/2021"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-draw">
                                <img class="overlay" src="assets/images/overlaymask.png" alt="">
                                <div class="icon">
                                    <img src="assets/images/d2.png" alt="">
                                </div>
                                <h4>
                                    PAGA 95
                                </h4>
                                <a href="#" class="custom-button2">Juega ahora</a>
                                <div class="next-draw">
                                    <span class="text">Próximo sorteo:</span>
                                    <div class="time">
                                        <img src="assets/images/time.png" alt="">
                                        <h6 class="time-countdown" data-countdown="01/06/2021"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-draw">
                                <img class="overlay" src="assets/images/overlaymask3.png" alt="">
                                <div class="icon">
                                    <img src="assets/images/d3.png" alt="">
                                </div>
                                <h4>
                                    PAGA 95
                                </h4>
                                <a href="#" class="custom-button1">Juega ahora</a>
                                <div class="next-draw">
                                    <span class="text">Próximo sorteo:</span>
                                    <div class="time">
                                        <img src="assets/images/time.png" alt="">
                                        <h6 class="time-countdown" data-countdown="01/02/2021"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-draw">
                                <img class="overlay" src="assets/images/overlaymask.png" alt="">
                                <div class="icon">
                                    <img src="assets/images/d4.png" alt="">
                                </div>
                                <h4>
                                    PAGA 95
                                </h4>
                                <a href="#" class="custom-button2">Juega ahora</a>
                                <div class="next-draw">
                                    <span class="text">Próximo sorteo:</span>
                                    <div class="time">
                                        <img src="assets/images/time.png" alt="">
                                        <h6 class="time-countdown" data-countdown="01/04/2021"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-draw">
                                <img class="overlay" src="assets/images/overlaymask3.png" alt="">
                                <div class="icon">
                                    <img src="assets/images/d3.png" alt="">
                                </div>
                                <h4>
                                    $211 Million
                                    Win BTC
                                </h4>
                                <a href="#" class="custom-button1">Play Now</a>
                                <div class="next-draw">
                                    <span class="text">Next Draw :</span>
                                    <div class="time">
                                        <img src="assets/images/time.png" alt="">
                                        <h6 class="time-countdown" data-countdown="01/05/2021"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Feature-Section========== -->

    <!-- ==========Features-Section========== -->
    <section class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-feature">
                        <div class="icon">
                            <img src="assets/images/f1.png" alt="">
                        </div>
                        <h4 class="title">Trust</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-feature">
                        <div class="icon">
                            <img src="assets/images/f2.png" alt="">
                        </div>
                        <h4 class="title">Safe & Security</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-feature">
                        <div class="icon">
                            <img src="assets/images/f3.png" alt="">
                        </div>
                        <h4 class="title">Zero commission</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-feature">
                        <div class="icon">
                            <img src="assets/images/f4.png" alt="">
                        </div>
                        <h4 class="title">24/7 Support</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Features-Section========== -->

    <!-- ==========Lottery-Result-Section========== -->
    <section class="lottery-result">
        <img class="bg-image" src="assets/images/result-background.jpg" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="content">
                        <div class="section-header">
                            <h2 class="title">
                                ÚLTIMOS RESULTADOS DE LOTERÍA
                            </h2>
                            <p class="text">
                                Verifique su lotería en línea, encuentre todos los números ganadores de la lotería y vea
                                 si ganaste los últimos botes de lotería
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="result-box">
                        <h4 class="box-header">Números ganadores de la lotería</h4>
                        <div class="result-list">
                            <div class="single-list">
                                <div class="light-area">
                                    <div class="light-area-top">
                                        <div class="left">
                                            <img src="assets/images/d1.png" alt="">
                                            <h4>tica</h4>
                                        </div>
                                        <div class="right">
                                            <span>El sorteo tuvo lugar el</span>
                                            <h6>sabado Abril 20, 2023</h6>
                                        </div>
                                    </div>
                                    <div class="light-area-bottom">
                                        <div class="left">
                                            <p>Numero ganador:</p>
                                            <div class="numbers">
                                                <span>11</span>
                                           
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span>premio</span>
                                            <h6>₡ 1.000.000</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="color-area">
                                    <div class="top">
                                        <span>El sorteo tuvo lugar el</span>
                                        <h6>sabado Abril 20, 2023</h6>
                                    </div>
                                    <div class="bottom">
                                        <span>premio</span>
                                            <h6>₡ 1.000.000</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-list">
                                <div class="light-area">
                                    <div class="light-area-top">
                                        <div class="left">
                                            <img src="assets/images/d2.png" alt="">
                                            <h4>Nica</h4>
                                        </div>
                                        <div class="right">
                                            <span>El sorteo tuvo lugar el</span>
                                            <h6>sabado Abril 20, 2023</h6>
                                        </div>
                                    </div>
                                    <div class="light-area-bottom">
                                        <div class="left">
                                            <p>Numero ganador:</p>
                                            <div class="numbers">
                                                <span>11</span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span>premio</span>
                                            <h6>₡ 1.000.000</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="color-area">
                                    <div class="top">
                                        <span>El sorteo tuvo lugar el</span>
                                            <h6>sabado Abril 20, 2023</h6>
                                    </div>
                                    <div class="bottom">
                                        <span>premio</span>
                                        <h6>₡ 1.000.000</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="single-list">
                                <div class="light-area">
                                    <div class="light-area-top">
                                        <div class="left">
                                            <img src="assets/images/d3.png" alt="">
                                            <h4>cerote kiko</h4>
                                        </div>
                                        <div class="right">
                                            <span>El sorteo tuvo lugar el</span>
                                            <h6>sabado Abril 20, 2023</h6>
                                        </div>
                                    </div>
                                    <div class="light-area-bottom">
                                        <div class="left">
                                            <p>Numero ganador:</p>
                                            <div class="numbers">
                                                <span>11</span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <span>premio</span>
                                        <h6>₡ 1.000.000</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="color-area">
                                    <div class="top">
                                        <span>El sorteo tuvo lugar el</span>
                                            <h6>sabado Abril 20, 2023</h6>
                                    </div>
                                    <div class="bottom">
                                        <span>premio</span>
                                        <h6>₡ 1.000.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a class="view-all" href="#">Ver todos los resultados ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Lottery-Result-Section========== -->

    <!-- ==========Check-Number-Section========== -->
  
    <!-- ==========Check-Number-Section========== -->

    
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

    <!--Script para cuando los datos son incorrectos login-->
    <script>
    $(document).ready(function() {
        <?php if(isset($_GET['error']) && $_GET['error'] === 'true'): ?>
            $('#errorModal').modal('show');
        <?php endif; ?>
    });
    </script>

    <!-- Modal Login de error -->
    <div id="errorModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Error de inicio de sesión</h4>
                </div>
                <div class="modal-body">
                    <p>El usuario o la contraseña son incorrectos.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>




    <!--Script para cuando se registra exitosamente -->
    <script>
    $(document).ready(function() {
        <?php if(isset($_GET['succes']) && $_GET['succes'] === 'true'): ?>
            $('#succesModal').modal('show');
        <?php endif; ?>
    });
    </script>

    <!-- Modal Login de error -->
    <div id="succesModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registro exitóso</h4>
                </div>
                <div class="modal-body">
                    <p>Sus datos han sido registrados exitosamente.</p>
                    <p>Ya puede iniciar sesión.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
   

    <!--Script para cuando se cambia los credenciales -->
    <script>
    $(document).ready(function() {
        <?php if(isset($_GET['succesRecovery']) && $_GET['succesRecovery'] === 'true'): ?>
            $('#succesModalReco').modal('show');
        <?php endif; ?>
    });
    </script>

    <!-- Modal Login de error -->
    <div id="succesModalReco" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cambio  de credenciales exitóso</h4>
                </div>
                <div class="modal-body">
                    <p>Su contraseña ha sido cambiada exitosamente.</p>
                    <p>Ya puede iniciar sesión.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

