<header class="top-header">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-area-inner">
                            <a href="index.php" class="logo">
                                <img src="assets/images/logo.png" alt="">
                            </a>

                            <?php

                                if (isset($_SESSION['emailuser'])) {
                                    echo '  <div class="right-area">
                                                <div class="log-reg-area">
                                                </div>
                                                <div class="cart-area">
                                                    <div class="icon">
                                                      <img src="assets/images/cart.png" alt="">
                                                      <span>06</span>
                                                    </div>
                                                    <div class="amount">
                                                      <h4 class="mony">₡ 2.500</h4>
                                                    </div>
                                                </div>
                                            </div>';
                                    echo 'Bienvenido, ' . $_SESSION['emailuser'] . '! ';
                                    echo '<a href="logout.php">Cerrar sesión</a>';
                                }
                                else{
                                   
                                     /* echo '<a href="#" class="custom-button2" class="custom-button2" data-toggle="modal" data-target="#loginModal">iniciar sesión</a>';
                                        echo '<a href="procesar_registro.php">registro</a>';*/


                    echo '<div class="right-area">
                            <div class="log-reg-area">
                              <a href="#" class="custom-button1" data-toggle="modal" data-target="#registerModal">Registro</a>
                              <a href="#" class="custom-button2" data-toggle="modal" data-target="#loginModal">iniciar sesión</a>
                            </div>
                            <div class="cart-area">
                              <div class="icon">
                                <img src="assets/images/cart.png" alt="">
                                 <!--<span>06</span>-->
                              </div>
                              <div class="amount">
                                <!--<h4 class="mony">₡ 2.500</h4>-->
                              </div>
                            </div>
                          </div>';

                                }
                            ?>
                           <!--<div class="right-area">
                                <div class="log-reg-area">
                                    <a href="#" class="custom-button1" data-toggle="modal"
                                        data-target="#registerModal">Registro</a>
                                    <a href="#" class="custom-button2" data-toggle="modal" data-target="#loginModal">iniciar sesión</a>
                                </div>
                                <div class="cart-area">
                                    <div class="icon">
                                        <img src="assets/images/cart.png" alt="">
                                        <span>06</span>
                                    </div>
                                    <div class="amount">
                                        <h4 class="mony">₡ 2.500</h4>
                                         
                                    </div>
                                </div>
                            </div>-->
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
                            <a href="index.php" >INICIO</a>
                        </li>
                        <li>
                            <a href="#">Loteria</a>
                            <ul class="submenu">
                                <li><a href="sorteo-uno.php">Sorteo 1</a></li>
                                <li><a href="sorteo-dos.php">Sorteo 2</a></li>
                                <li><a href="sorteo-tres.php">Sorteo 3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Resultados</a>
                        </li>
                        <li>
                            <a href="#">Recargas</a>
                        </li>
                        <li>
                            <a href="#">Pago de Servicios</a>
                        </li> 

                        <li>
                            <a href="about.php">Acerca de</a>
                        </li>
 
                        <li>
                            <a href="contact.php">CONTACTO</a>
                        </li>
                    </ul>
                    <div class="right-tools">
                    
                        <select class="select-bar">
                            <option value="">EN</option>
                            <option value="">ES</option>
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