<?php
require_once 'configBD.php';
session_start();

// Validar los datos del formulario de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    $correo = $_POST['emailRecovery'];
    $password = $_POST['passwordRecovery'];



    $sql = "UPDATE usuarios SET password = '$password' WHERE correo = '$correo'";
    if ($conn->query($sql) === TRUE) {
        // Registro exitoso, mostrar modal
        //echo "<script>alert('¡Cambio de contraseña exitoso!');</script>";

        header('Location: index.php?succesRecovery=true');
        exit();

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    #$_SESSION['correo'] = $correo;
     
    /*/$_SESSION['nombre'] = $nombre;
    header('Location: index.php');
    exit();*/
}
?>
