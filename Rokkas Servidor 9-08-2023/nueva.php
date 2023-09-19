
<?php
// Datos de conexión a la base de datos
$dbHost = 'localhost';
$dbUsername = 'loterias_yostin';
$dbPassword = 'helios300.';
$dbName = 'loterias_proyectochances';

// Nombre de la tabla y el nombre de la columna que deseas agregar


// Crear la conexión
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);



// Verificar si hay errores de conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Consulta para crear una tabla
/*$sql = "CREATE TABLE compra_sorteos (
    id_comprasorteo INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    tipo_sorteoid INT NOT NULL,
    montocompra INT
    
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla creada exitosamente.";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}*/
	
$sql_update = "UPDATE usuarios SET monto = 10000 WHERE id_usuario = 2";

if ($conn->query($sql_update) === TRUE) {
    echo "Monto actualizado con éxito.";
} else {
    echo "Error al actualizar el monto: " . $conn->error;
}

// Consulta SQL para agregar la columna a la tabla
/*$sql = "DELETE FROM tipo_sorteos WHERE id_sorteo =2;";*/
#$sql = "ALTER TABLE usuarios ADD monto integer;"
#$sql = "UPDATE SET monto =10000 WHERE usuario_id = 2;"


/*$sql = "CREATE TABLE compra_sorteos (
    id_comprasorteo int NOT NULL AUTO_INCREMENT,
    usuario_id int NOT NULL,
    tipo_sorteoid int NOT NULL,
    montocompra int,
    PRIMARY KEY (id_comprasorteo)
);"

/*Actualizar el monto del usuario haciendo la resta*/





// Ejecutar la consulta
/*if ($conn->query($sql) === TRUE) {
    echo "<h1>La tabla se creo correctamente.</h1>";
} else {
    echo "Error al borrar los datos: " . $conn->error;
}*/

// Cerrar la conexión
?>


