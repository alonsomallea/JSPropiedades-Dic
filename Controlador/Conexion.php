<?php 

define('DB_SERVER', 'localhost');   //Nombre del Server
define('DB_USERNAME', 'root');      //Nombre del Usuario
define('DB_PASSWORD', '');          //Contraseña
define('DB_NAME', 'test_usuario');  //Nombre de la Base de Datos

//Conecta a la base de datos
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Si no hay conexion arroja error
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>