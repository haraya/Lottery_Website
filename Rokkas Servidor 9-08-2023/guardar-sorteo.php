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


//echo "<h1>".$idUsuario."</h1>"; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $sorteoID = $_POST['sorteoId'];
    $tiposorteo = $_POST['sorteo'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    

    if ($sorteoID == 1) {

        $sql = "INSERT INTO tipo_sorteos (tipo_sorteo, fecha, hora, id_sorteo, estado, id_usuario)
        VALUES ('$tiposorteo', '$fecha', '$hora', $sorteoID, 'En Proceso', $idUsuario)";
     
        $sqlParticipacion = "INSERT INTO participaciones (id_sorteo, id_usuario) 
        VALUES ($sorteoID, $idUsuario)";
       

        if ($conn->query($sql) == TRUE && $conn->query($sqlParticipacion) == TRUE) {
            header('Location: sorteo-uno.php');
            exit();
           
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
    }

        
    } elseif ($sorteoID == 2) {
        $sql = "INSERT INTO tipo_sorteos (tipo_sorteo, fecha, hora, id_sorteo, estado, id_usuario) 
        VALUES ('$tiposorteo', '$fecha', '$hora', $sorteoID, 'En Proceso', $idUsuario)";
     
        $sqlParticipacion = "INSERT INTO participaciones (id_sorteo, id_usuario) 
        VALUES ($sorteoID, $idUsuario,)";

        if ($conn->query($sql) == TRUE) {
            header('Location: sorteo-dos.php');
            exit();  
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }elseif ($sorteoID == 3) {
         $sql = "INSERT INTO tipo_sorteos (tipo_sorteo, fecha, hora, id_sorteo, estado, id_usuario) 
        VALUES ('$tiposorteo', '$fecha', '$hora', $sorteoID, 'En Proceso', $idUsuario)";
     
        $sqlParticipacion = "INSERT INTO participaciones (id_sorteo, id_usuario) 
        VALUES ($sorteoID, $idUsuario,)";

        if ($conn->query($sql) == TRUE) {
            header('Location: sorteo-tres.php');
            exit();  
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }

}




/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$numeroSele = $_POST['numeroSele'];
	$monto = $_POST['monto'];


    $sql = "INSERT INTO numeroseleccionado (numero, monto) 
    VALUES ($numeroSele, $monto)";

    if ($conn->query($sql) == TRUE) {
        echo "Registro exitoso. Ahora puedes iniciar sesión.";
        header('Location: sorteo-uno.php');
        exit();
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}*/




?>
