<?php

require_once 'configBD.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emailuser = $_POST['emailuser'];
    $password = $_POST['password'];

    
    //Verificar los datos con la tabla usuario de la BD
    $sql = "SELECT * FROM usuarios WHERE correo = '$emailuser' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuario y contraseña válidos, iniciar sesión
        session_start();
        $_SESSION['emailuser'] = $emailuser;
        header("Location: index.php");
        exit();

    } else {

        // Usuario o contraseña incorrectos
	    header('Location: index.php?error=true');
	    exit();
    }
   
}
?>



