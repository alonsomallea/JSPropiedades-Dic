<?php
// Inicia las variables de sesion
session_start();
 
// Restaura todas las variables de sesion
$_SESSION = array();
 
// Cierra la sesion
session_destroy();
 
// Redireccoina al Login
header("location: ../Vista/24601/Login.php");
exit;
?>