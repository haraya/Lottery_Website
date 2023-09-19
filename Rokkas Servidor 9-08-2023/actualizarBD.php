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

	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') 
	{
    
    	$idSorteo = $_POST['idSorteo'];

   		if ($idSorteo == 1) 
   		{
   			$sql_update_tipo_sorteos ="UPDATE tipo_sorteos SET estado ='Completado' WHERE estado ='En Proceso' AND id_usuario= $idUsuario AND id_sorteo = 1";
   			$sql_update_numeros ="UPDATE numeros SET comprado = 1 WHERE comprado = 0 AND id_usuario= $idUsuario AND id_sorteo = 1" ;

   			if ($conn->query($sql_update_tipo_sorteos) === TRUE && $conn->query($sql_update_numeros) === TRUE) 
   			{
			    header('Location: sorteo-uno.php?succesCompra=true');
            	exit();

			} else {
			    echo "Error al actualizar la compra: " . $conexion->error;
			}
   		}

		elseif($idSorteo == 2)
		{
			$sql_update_tipo_sorteos ="UPDATE tipo_sorteos SET estado ='Completado' WHERE estado ='En Proceso' AND id_usuario= $idUsuario AND id_sorteo = 2";
      $sql_update_numeros ="UPDATE numeros SET comprado = 1 WHERE comprado = 0 AND id_usuario= $idUsuario AND id_sorteo = 2" ;

			if ($conn->query($sql_update_tipo_sorteos) === TRUE && $conn->query($sql_update_numeros) === TRUE) 
   			{
			    header('Location: sorteo-dos.php');
            	exit();

			} else {
			    echo "Error al actualizar la compra: " . $conexion->error;
			}

		}

		elseif($idSorteo == 3)
		{
			$sql_update_tipo_sorteos ="UPDATE tipo_sorteos SET estado ='Completado' WHERE estado ='En Proceso' AND id_usuario= $idUsuario AND id_sorteo = 3";
      $sql_update_numeros ="UPDATE numeros SET comprado = 1 WHERE comprado = 0 AND id_usuario= $idUsuario AND id_sorteo = 3" ;

			if ($conn->query($sql_update_tipo_sorteos) === TRUE && $conn->query($sql_update_numeros) === TRUE) 
   			{
			    header('Location: sorteo-tres.php');
            	exit();

			} else {
			    echo "Error al actualizar la compra: " . $conexion->error;
			}

		}

	}
?>