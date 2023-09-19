<?php
session_start();

// Destruir la sesión y redirigir a la página principal
unset($_SESSION['emailuser']);
session_destroy();
header('Location: index.php');
exit();
?>
