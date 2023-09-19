<?php
   require_once 'configBD.php';
    session_start();
    $idUsuario = "";

    if (isset($_SESSION['emailuser'])) {
        $emailUsuario = $_SESSION['emailuser'];
             
        $sqlUsuario = "SELECT  *  FROM usuarios WHERE correo = '$emailUsuario'";
        $resultUsuario = mysqli_query($conn, $sqlUsuario);

        $filaUsuario = mysqli_fetch_assoc($resultUsuario);
        $idUsuario = $filaUsuario['id_usuario'];
    }

 

    // Codigo para el select del tipo sorteo
    $ID_Tiposorteo = 0;
    $sql = "SELECT * FROM tipo_sorteos  WHERE id_sorteo = 1 AND estado ='En Proceso' AND id_usuario=$idUsuario";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows>0) {
        //while ($fila = mysqli_fetch_assoc($result)) 
        while ($fila = $resultado ->fetch_assoc()) 
        {                              
            $ID_Tiposorteo = $fila['id_tiposorteo'];
        } 
    }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numeroSele = $_POST['numeroSele'];
    $monto = $_POST['monto'];


    $sql = "INSERT INTO numeros(numero, monto, id_usuario, id_sorteo, comprado, mes, id_tiposorteo) 
    VALUES ($numeroSele, $monto, $idUsuario, 1, 0, NULL, $ID_Tiposorteo)";

    if ($conn->query($sql) == TRUE) {
        //echo "Registro exitoso. Ahora puedes iniciar sesión.";
        header('Location: sorteo-uno.php');
        exit();
       
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        header('Location: sorteo-uno.php?errorNumero=true');
        exit();
    }

}


    //Eliminacion el numero de la lista
    if (isset($_GET['id'])) {
        $id = $conn->real_escape_string($_GET['id']);

        // Crear la consulta SQL para eliminar el dato con el ID proporcionado
        $sql = "DELETE FROM numeros WHERE id_numero = $id";
        if ($conn->query($sql) === TRUE) {
            // Redirigir al usuario nuevamente a la página de datos con un mensaje de éxito
            header('Location: sorteo-uno.php');
            exit();
        } else {
            // Si ocurrió un error, redirigir al usuario nuevamente a la página de datos con un mensaje de error
            header('Location: sorteo-uno.php');
            exit();
        }
    }
    
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>ROKAS</title>

    <style type="text/css">
        .seleccionado {
           background-image: linear-gradient(86deg, #ec038b 0%, #fb6468 44%, #fbb936 100%) !important;
           color:#ffffff !important;
        }
        .numero:hover{
            background-image: linear-gradient(86deg, #ec038b 0%, #fb6468 44%, #fbb936 100%) !important;
           color:#ffffff !important;
        }
    </style>
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
                                    <form action="guardar-sorteo.php" method="POST">
                                        <input type="hidden" id="sorteoId" name="sorteoId" value="1">
                                        <ul> 
                                        <li>
                                            <div class="item">
                                                <div class="single-number">
                                                    <ul>
                                                        <li>    
                                                            <label>Selecciona tu sorteo</label> 
                                                            <br>
                                                        </li> 
                                                    </ul>
                                                    <select id="sorteo" name="sorteo">
                                                        <option value="Tica">Tica</option>
                                                        <option value="Nica">Nica</option>
                                                        <option value="Otra">Otra</option>
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
                                                    <input type="date" id="fecha" name="fecha" required>
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
                                                    <input type="time" id="hora" name="hora" required>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <div class="single-number">
                                                    <ul>
                                                        <li>
                                                            <button type="submit">Agregar</button><br>
                                                        </li> 
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                       
                                    </ul>
                                     </form>
                                     
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="time-wrapper">
                        <div class="time-counter">
                            <div class="middle-area">
                            <?php 
                                $ID_Tiposorteo = 0;
                                $sql = "SELECT * FROM tipo_sorteos  WHERE id_sorteo = 1 AND estado ='En Proceso' AND id_usuario=$idUsuario";
                                    $resultado = $conn->query($sql);

                                    if ($resultado->num_rows>0) {
                                        //while ($fila = mysqli_fetch_assoc($result)) 
                                        echo "<table class='table'>";
                                        echo "<tr>";
                                        echo "<th>Sorteo</th>";
                                        echo "<th>Fecha</th>";
                                        echo "<th>Hora</th>";
                                        echo "<tr>";
                                        while ($fila = $resultado ->fetch_assoc()) 
                                        {
                                           echo "<tr>";
                                            echo" <td>".$fila['tipo_sorteo']."</td>";
                                            echo" <td>".$fila['fecha']."</td>";
                                            echo" <td>".$fila['hora']."</td>";
                                            echo "</tr>";

                                        
                                            
                                            /*echo "<div class='tikit'>";
                                           
                                            //echo "<span class='left'> ID -".$fila['id_tiposorteo']."</span> ";
                                            echo "<span class='left'>Sorteo: ".$fila['tipo_sorteo']."</span>, ";
                                            echo "<span class='right'>Fecha: ".$fila['fecha']."</span>, ";
                                            echo "<span class='right'>Hora: ".$fila['hora']."</span> ";
                                            
                                            echo "</div>";
                                            echo "<br>";*/
                                            $ID_Tiposorteo = $fila['id_tiposorteo'];
                                        }
                                         echo "</table>";
                                    }
                                    else{
                                        echo '<h3>No has seleccionado ningún tipo de sorteo</h3>';
                                    }
                                
                                    
                                ?>
                            </div>
                            <!--<img src="assets/images/clock.png" alt="">
                            <p class="time-countdown" data-countdown="01/01/2021"></p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pick-number-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-6">
                                <div class="single-pick">
                                    <form action="sorteo-uno-session.php" method="POST">
                                        <div class="header-area">
                                            <h4 class="title">Elige un números</h4>
                                            <!--<div class="buttons">
                                                <a href="#" class="custom-button2"><i class="fas fa-trash-alt"></i>Limpiar todo</a>
                                            </div>-->
                                        </div>
                                        <div class="body-area">
                                            <ul>
                                                <?php for ($i=1; $i <100 ; $i++) { ?>
                                                <li>
                                                    <label>
                                                        <input type='radio' name='numeroSele' id="numeroSele" value="<?php echo $i; ?>" required>
                                                        <span class="numero"  data-numero="<?php echo $i ?>">
                                                         
                                                            <?php echo $i ?> 
                                                        </span>
                                                    </label>
                                                    
                                                </li>
                                                <?php  } ?>
                                            </ul>
                                        </div>
                                        <div class="header-area">
                                            <input type="number" name="monto" id="monto" max="10000" min="10" required>
                                            <button type="submit" class="btn btn-primary">
                                                Agregar a la lista
                                            </button>
                                            <!--<div class="buttons">
                                                <a href="#" class="custom-button2">
                                                 Agregar monto
                                                </a>
                                            </div>-->
                                        </div>
                                    </form>

                                    <script>
                                    // Agregar el evento 'click' a todos los números
                                        const numeros = document.querySelectorAll('.numero');
                                        numeros.forEach(numero => 
                                        {
                                            numero.addEventListener('click', () => 
                                            {
                                                // Si ya está seleccionado, lo deseleccionamos
                                                if (numero.classList.contains('seleccionado')) {
                                                    numero.classList.remove('seleccionado');
                                                } else {
                                                    // Si no está seleccionado, lo marcamos como seleccionado
                                                    numero.classList.add('seleccionado');
                                                }
                                            });
                                        });
                                    </script>



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
                                <?php 

                               
                                    $sql = "SELECT * FROM numeros  WHERE id_sorteo = 1 AND id_usuario=$idUsuario AND comprado = 0";
                                    $resultado = $conn->query($sql);

                                    if ($resultado->num_rows>0) {
                                        //while ($fila = mysqli_fetch_assoc($result)) 
                                        while ($fila = $resultado ->fetch_assoc()) 
                                        {
                                            echo "<div class='tikit'>";
                                            
                                            
                                            echo "<span class='left'>".$fila['numero']."</span>";
                                            echo "<span class='right'>₡".$fila['monto']."</span>";
                                            echo '<div class="buttons">
                                                        <a href="sorteo-uno-session.php?id='.$fila['id_numero'].'" class="custom-button2">
                                                            <i class="fas fa-trash-alt"></i>
                                                            Quitar
                                                        </a>
                                                    </div>';
                                            echo "</div>";
                                        }
                                    }
                                    else{
                                        echo '<h3>No has seleccionado ningún número</h3>';
                                    }
                                
                                    
                                ?>
                                <!--<div class="tikit">
                                    <span class="left">Boletos llenos</span>
                                    <span class="right">3</span>
                                </div>
                                <div class="price">
                                    <span class="left">Precio del boleto
                                        
                                    </span>
                                    <span class="right">₡10.000</span>
                                </div>-->
                            </div>
                            <div class="bottom-area">
                                <div class="total-area">
                                    <span class="left">Total</span>
                                    <?php 
                                    $sql = "SELECT SUM(monto) AS total FROM numeros WHERE id_sorteo = 1 AND id_usuario=$idUsuario AND comprado = 0";
                                    $result = mysqli_query($conn, $sql);

                                    $fila = mysqli_fetch_assoc($result);
                                    $total = $fila['total'];

                                    ?>
                                    <span class="right">₡<?php echo $total; ?></span>
                                </div>
                                <a href="#loteriaModal" data-toggle="modal" data-target="#loteriaModal" class="custom-button2" >
                                    Comprar boletos
                                </a>
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

    


<div class="modal fade " id="loteriaModal" role="dialog" tabindex="-1"aria-labelledby="modal2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                 <!--<span class="close" onclick="closeModal('login')">&times;</span>-->
                <div class="modal-body">
                    <div class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                    <div class="log-reg-inner">
                        <h2 class="title">
                            Comprar Boletos
                        </h2>
                        <div class="main-content">

                            <?php 
                             
                                $sql = "SELECT * FROM numeros WHERE id_sorteo=1 AND id_usuario=$idUsuario AND comprado = 0";
                                $resultado = $conn->query($sql);

                                if ($resultado->num_rows>0) {?>
                                    <form action="actualizarBD.php" method="POST">
                                        <input type="hidden" name="idSorteo" id="idSorteo" value="1">
                                        <div class="form-group">
                                        <?php  
                                        $sqlsorteo = "SELECT * FROM tipo_sorteos  WHERE id_sorteo=1 AND estado ='En Proceso' AND id_usuario=$idUsuario";
                                        $resultsor = mysqli_query($conn, $sqlsorteo);

                                        $filasor = mysqli_fetch_assoc($resultsor);
                                        $fecha = $filasor['fecha'];

                                                        
                                        ?>
                                        <label for="Fecha">Fecha: <?php echo $fecha; ?></label> 

                                        </div>
                                        <div class="form-group">
                                          <label for='Numeros'> Números:

                                            <?php 
                                            $sql = "SELECT * FROM numeros WHERE id_sorteo = 1 AND id_usuario=$idUsuario AND comprado = 0";
                                            $resultado = mysqli_query($conn, $sql);

                                              while ($fila = mysqli_fetch_assoc($resultado)) {
                                               
                                               echo "<label> ".$fila['numero'] . ", </label>" ;
                                               
                                            }

                                            ?>
                                          </label>
                                             
                                        </div>
                                        <div class="form-group">
                                          <?php 
                                            $sql = "SELECT SUM(monto) AS total FROM numeros  WHERE id_sorteo=1 AND id_usuario=$idUsuario AND comprado = 0";
                                            $result = mysqli_query($conn, $sql);

                                            $fila = mysqli_fetch_assoc($result);
                                            $total = $fila['total'];

                                            ?>
                                            <label for="Monto"> Monto a pagar:
                                             ₡<?php echo $total; ?>
                                                
                                            </label>  
                                        </div>

                                        <div class="button-wrapper">
                                            <button class="custom-button2">
                                                Pagar
                                            </button>
                                        </div>

                                    </form>
                            


                            <?php }else{?>
                               
                                <div class="form-group">
                                    <?php  
                                        echo '<h3>Debes de seleccionar los numeros con sus respectivo monto</h3>';
                                    ?>
                                </div>
                            <?php }   ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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