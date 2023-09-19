<?php
// Configuración de la conexión a la base de datos
/*$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'rokas_loteria';*/


$dbHost = 'localhost';
$dbUsername = 'loterias_yostin';
$dbPassword = 'helios300.';
$dbName = 'loterias_proyectochances';
// Conexión a la base de datos
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
else{
	#print("La connexion es exitosa");
}

?>