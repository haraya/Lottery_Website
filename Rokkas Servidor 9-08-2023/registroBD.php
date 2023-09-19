<?php 
require_once 'configBD.php';

// Validar los datos del formulario de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombreusuario'];
    $apellidos = $_POST['apellidousuario'];
    $telefono = $_POST['telusuario'];
    $usuario = $_POST['usuariologin'];
    $correo = $_POST['emailuser'];
    $password = $_POST['usuariopass'];


    //Insertar los datos en la Tabla usuarios
    $sql = "INSERT INTO usuarios (nombre, apellidos, telefono, usuario, password, correo) 
    VALUES ('$nombre', '$apellidos', '$telefono', '$usuario', '$password', '$correo')";

    if ($conn ->query($sql) == TRUE) {

    	//Registro exitoso, mostrar modal
        $_SESSION['emailuser'] = $correo;
        header('Location: index.php?succes=true');
        exit();

        echo "<script>alert('¡Registro exitoso!');</script>";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



    /*$_SESSION['emailuser'] = $correo;
    header('Location: index.php');
    exit();*/
}



?>