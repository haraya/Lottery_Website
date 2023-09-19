

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
        <img class="lottory" src="assets/images/lottery-b-icon.png" alt="">
        <div class="container">
            <div class="content">
                <h2 class="title">
                    Loterias
                </h2>
                <ul class="breadcrumb-list extra-padding">
                    <li>
                        <a href="index.html">
                            INICIO
                        </a>
                    </li>

                    <li>
                        <a href="#">LOTERIAS</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Breadcrumb-Section========== -->

    <!-- ==========Singlelottery-Section========== -->
    <section class="singlelottery">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="steps">
                        <div class="left">
                            <h4>Solo 3 sencillos pasos</h4>
                        </div>
                        <div class="right">
                            <ul>
                                <li>
                                    <div class="box">
                                        <img src="assets/images/bt1.png" alt="">
                                        <p>1. Elegir</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <img src="assets/images/bt2.png" alt="">
                                        <p>2. Jugar</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <img src="assets/images/bt3.png" alt="">
                                        <p>3. Ganar</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="box">
                            <div class="steps">
                                <div class="right">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <div class="single-number">
                                                    <ul>
                                                        <li>    
                                                            <label>Selecciona tu sorteo</label> <br>
                                                        </li> 
                                                    </ul>
                                                    <select >
                                                        <option value="">Tica</option>
                                                        <option value="">Nica</option>
                                                        <option value="">Otra</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <div class="single-number">
                                                    <ul>
                                                        <li>
                                                            <label>Selecciona la fecha</label> <br>
                                                        </li> 
                                                    </ul>
                                                    <input type="date" name="fecha">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <div class="single-number">
                                                    <ul>
                                                        <li>
                                                            <label>Selecciona la hora</label> <br>
                                                        </li> 
                                                    </ul>
                                                    <input type="time" name="fecha">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--<div class="time-wrapper">
                        <div class="time-counter">
                            <img src="assets/images/clock.png" alt="">
                            <p class="time-countdown" data-countdown="01/01/2021"></p>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <div class="pick-number-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pick">
                                    <div class="header-area">
                                        <h4 class="title">Sorteo 1</h4>
                                        <h4 class="title">Elige un números</h4>
                                        <div class="buttons">
                                        
                                            <a href="#" class="custom-button2"><i class="fas fa-trash-alt"></i>Limpiar todo</a>
                                        </div>
                                    </div>
                                    <div class="body-area">
                                        <ul>
                                            <?php for ($i=1; $i <100 ; $i++) { ?>
                                            <li>
                                                <span> <?php echo $i ?> </span>
                                            </li>
                                            <?php  } ?>
                                        </ul>
                                    </div>
                                    <div class="header-area">
                                        <input type="number" name="monto" id="monto" max="10000" min="100">
                                        <div class="buttons">
                                            <a href="#" class="custom-button2">
                                             Agregar monto
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pick">
                                    <div class="header-area">
                                        <h4 class="title">Sorteo 2</h4>
                                        <h4 class="title">Elige un números</h4>
                                        <div class="buttons">
                                        
                                            <a href="#" class="custom-button2"><i class="fas fa-trash-alt"></i>Limpiar todo</a>
                                        </div>
                                    </div>
                                    <div class="body-area">
                                         <ul>
                                            <?php for ($i=1; $i <1000 ; $i++) { ?>
                                            <li>
                                                <span> <?php echo $i ?> </span>
                                            </li>
                                            <?php  } ?>
                                        </ul>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pick">
                                    <div class="header-area">
                                        <h4 class="title">Sorteo 3</h4>
                                        <h4 class="title">Elige un números</h4>
                                        <div class="buttons">
                                        
                                            <a href="#" class="custom-button2"><i class="fas fa-trash-alt"></i>Limpiar todo</a>
                                        </div>
                                    </div>
                                    <div class="body-area">
                                        <div class="item">
                                            <div class="single-number">
                                                <ul>
                                                    <li>    
                                                        <label>Selecciona el mes</label> <br>
                                                    </li> 
                                                </ul>
                                                <select >
                                                    <option value="">Enero</option>
                                                    <option value="">Febrero</option>
                                                    <option value="">Marzo</option>

                                                    <option value="">Abril</option>
                                                    <option value="">Mayo</option>
                                                    <option value="">Junio</option>

                                                    <option value="">Julio</option>
                                                    <option value="">Agosto</option>
                                                    <option value="">Septiembre</option>

                                                    <option value="">Octubre</option>
                                                    <option value="">Noviembre</option>
                                                    <option value="">Diciembre</option>
                                                </select>
                                            </div>
                                        </div>
                                         <ul>
                                            <?php for ($i=1; $i <31 ; $i++) { ?>
                                            <li>
                                                <span> <?php echo $i ?> </span>
                                            </li>
                                            <?php  } ?>
                                        </ul>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                         
                    </div>
                    <div class="col-lg-3">
                        <div class="cart-summary">
                            <div class="top-area">
                                <h4 class="title">
                                    Resumen de la compra
                                </h4>
                                <p class="text">
                                    Sorteo paga al 95 
                                </p>
                            </div>
                            <div class="middle-area">
                                <div class="tikit">
                                    <span class="left">Boletos llenos</span>
                                    <span class="right">3</span>
                                </div>
                                <div class="price">
                                    <span class="left">Precio del boleto
                                        
                                    </span>
                                    <span class="right">₡10.000</span>
                                </div>
                            </div>
                            <div class="bottom-area">
                                <div class="total-area">
                                    <span class="left">Total</span>
                                    <span class="right">₡10.000</span>
                                </div>
                                <a href="#" class="custom-button2">Comprar boletos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="frequent-number">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="section-header">
                            <h2 class="title ep">
                                NÚMERO MÁS FRECUENTE
                            </h2>
                            <p class="text">
                                Verifique su lotería en línea, encuentre todos los números ganadores de lotería y vea Si ganaste los últimos botes de lotería
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="number-slider owl-carousel">
                            <div class="item">
                                <div class="single-number">
                                    <ul>
                                        <li>
                                            <span>1</span>
                                        </li>
                                         
                                    </ul>
                                    <input type="text" placeholder="Try These Numbers">
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-number">
                                    <ul>
                                        <li>
                                            <span>2</span>
                                        </li>
                                        
                                    </ul>
                                    <input type="text" placeholder="Try These Numbers">
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-number">
                                    <ul>
                                  
                                        <li>
                                            <span>3</span>
                                        </li>
                                        
                                    </ul>
                                    <input type="text" placeholder="Try These Numbers">
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-number">
                                    <ul>
                                        
                                        <li>
                                            <span>6</span>
                                        </li>
                                    </ul>
                                    <input type="text" placeholder="Try These Numbers">
                                </div>
                            </div>
                         
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Singlelottery-Section========== -->

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