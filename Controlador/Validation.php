<?php
//Inicia Session
session_start();

// Revisa si la sesion ya esta inciada, si es asi redirecciona a landing.php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: Menu.php");
    exit;
}

//Incluye la conexion una sola vez
include_once "Conexion.php";

//Inicaliza las variables
$username = $password = "";
$username_err = $password_err = $login_err = "";

//Procesa la informacion del formulario al ser enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Recoge los datos
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    //validar las Credenciales
    if (empty($username_err) && empty($password_err)) {
        
        //Se prepara un query para ver si el usuario existe
        $sql = "SELECT ID, Usuario, Hashed_Password FROM usuarios WHERE Usuario = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            
            //Se relacionan las variables al query como parametros
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            //Asignar parametro
            $param_username = $username;

            //Intenta ejecutar el query
            if (mysqli_stmt_execute($stmt)) {
                
                //Almacena el resultado
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    
                    //Se relacionan las variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    
                    if (mysqli_stmt_fetch($stmt)) {

                        //Verifica la contraseña
                        if (password_verify($password, $hashed_password)) {
                            
                            //a contraseña es correcta y se inicia sesion
                            session_start();

                            //Se almacena informacion en las variables de sesion
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            //Redirecciona al usuario a la pagina Landing.php
                            header("Location: ../Vista/24601/Menu.php");
                        }
                        else {
                            header("Location: ../Controlador/LoginError/passerror.php");
                        }
                    }
                }
                else {
                    header("Location: ../Controlador/LoginError/usererror.php");  //Error de Usuario
                }
            }
            else {
                header("Location: ../Controlador/LoginError/dberror.php");
            }

            mysqli_stmt_close($stmt);
        }
    }

    //Cierra la conexion
    mysqli_close($link);
}
?>