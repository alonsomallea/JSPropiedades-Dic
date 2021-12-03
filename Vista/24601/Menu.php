<?php
//Inicia Session
session_start();

// Revisa si la sesion ya esta inciada, si es asi redirecciona a landing.php
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
    header("location: Login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <P>
        <title>Jessica ADM Asesorias SPA- Corredora de Propiedades</title>
    </p>

    <!-- Bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-social@2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Titulo y Boton Salir -->
    <section class="section">
        <div class="columns">
            <div class="column is-10">
                <p class="title">Menu Adminstrador de Propiedades</p>
            </div>
            <div class="column is-2">
                <form action="../../Controlador/Logout.php" method="post">
                    <button type="submit" class="button is-danger">Cerrar Sesion</button>
                </form>
                
            </div>
        </div>
    </section>

    <!-- Seccion Ingresar Nueva Propiedad -->
    <section class="section">
        <div class="tile is-ancestor">
            <div class="tile is-parent is-vertical box">
                <div class="tile is-parent">
                    <h1 class="title">Ingresar Nueva Propiedad</h1>
                </div>
                <div class="tile is-parent">
                    <div class="tile is-child">
                        <p class="title is-6">Nombre del Campo</p>
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                    <div class="tile is-child">
                        <p class="title is-6">Nombre del Campo</p>
                        <input class="input" type="number" placeholder="0">
                    </div>
                    <div class="tile is-child">
                        <p class="title is-6">Nombre del Campo</p>
                        <div class="select">
                            <select>
                                <option>Select dropdown</option>
                                <option>With options</option>
                            </select>
                        </div>
                    </div>
                    <div class="tile is-child">
                        <p class="title is-6">Nombre del Campo</p>
                        <div class="select">
                            <select>
                                <option>Select dropdown</option>
                                <option>With options</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="tile is-parent">
                    <div class="tile is-child">
                        <p class="title is-6">Nombre del Campo</p>
                        <div class="select">
                            <select>
                                <option>Select dropdown</option>
                                <option>With options</option>
                            </select>
                        </div>
                    </div>
                    <div class="tile is-child">
                        <p class="title is-6">Nombre del Campo</p>
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                    <div class="tile is-child">
                        <p class="title"></p>
                    </div>
                    <div class="tile is-child">
                        <p class="title"></p>
                    </div>
                </div>
                <div class="tile is-parent">
                    <div class="tile is-child">
                        <p class="title is-6">Nombre del Campo</p>
                        <input class="input" type="number" placeholder="0">
                    </div>
                    <div class="tile is-child">
                        <p class="title is-6">Nombre del Campo</p>
                        <input class="input" type="number" placeholder="0">
                    </div>
                    <div class="tile is-child">
                        <p class="title is-6">Nombre del Campo</p>
                        <input class="input" type="number" placeholder="0">
                    </div>
                    <div class="tile is-child">
                        <p class="title"></p>
                    </div>
                </div>
                <div class="tile is-parent">
                    <div class="tile is-child">
                        <p class="title is-6">Nombre del Campo</p>
                        <input class="input" type="number" placeholder="0">
                    </div>
                    <div class="tile is-child">
                        <p class="title is-6">Nombre del Campo</p>
                        <input class="input" type="number" placeholder="0">
                    </div>
                    <div class="tile is-child">
                        <p class="title is-6">Nombre del Campo</p>
                        <div class="select">
                            <select>
                                <option>Select dropdown</option>
                                <option>With options</option>
                            </select>
                        </div>
                    </div>
                    <div class="tile is-child">
                        <p class="title is-6">Nombre del Campo</p>
                        <div class="select">
                            <select>
                                <option>Select dropdown</option>
                                <option>With options</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="tile is-parent">
                    <div class="tile is-child">
                        <div class="file has-name">
                            <label class="file-label">
                                <input class="file-input" type="file" name="resume">
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                        Subir Archivo…
                                    </span>
                                </span>
                                <span class="file-name">
                                    Screen Shot 2017-07-29 at 15.54.25.png
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="tile is-child">
                        <p class="title"></p>
                    </div>
                    <div class="tile is-child">
                        <button class="button is-primary is-fullwidth">Ingresar Propiedad</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seccion Lista de Propiedades -->
    <section class="section">
        <div class="box">
            <h1 class="title">Lista de Propiedades</h1>
            <div class="container">
                <table class="table is-striped is-hoverable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Propietario</th>
                            <th>Ubicacion</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>001</th>
                            <th>Jose Peres</th>
                            <th>San Antonio</th>
                            <th><button class="button is-warning">Modificar</button></th>
                            <th><button class="button is-danger">Eliminar</button></th>
                        </tr>
                        <tr>
                            <th>001</th>
                            <th>Jose Peres</th>
                            <th>San Antonio</th>
                            <th><button class="button is-warning">Modificar</button></th>
                            <th><button class="button is-danger">Eliminar</button></th>
                        </tr>
                        <tr>
                            <th>001</th>
                            <th>Jose Peres</th>
                            <th>San Antonio</th>
                            <th><button class="button is-warning">Modificar</button></th>
                            <th><button class="button is-danger">Eliminar</button></th>
                        </tr>
                        <tr>
                            <th>001</th>
                            <th>Jose Peres</th>
                            <th>San Antonio</th>
                            <th><button class="button is-warning">Modificar</button></th>
                            <th><button class="button is-danger">Eliminar</button></th>
                        </tr>
                        <tr>
                            <th>001</th>
                            <th>Jose Peres</th>
                            <th>San Antonio</th>
                            <th><button class="button is-warning">Modificar</button></th>
                            <th><button class="button is-danger">Eliminar</button></th>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Propietario</th>
                            <th>Ubicacion</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>

    <!-- Seccion Ingresar Nuevos Datos -->
    <section class="section">
        <div class="box">
            <p class="title">Ingresa Nuevos Datos</p>

            <!-- Primer Dato -->
            <div class="tile is-ancestor">
                <div class="tile is-parent is-vertical">
                    <div class="tile is-child">
                        <p class="title is-4">Tipo de Dato</p>
                    </div>
                    <div class="tile is-parent">
                        <div class="tile is-child">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                        <div class="tile is-child">
                            <button class="button is-fullwidth">Agregar</button>
                        </div>
                    </div>
                    <div class="tile is-child">
                        <table class="table is-striped is-hoverable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo de Inmueble</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>001</th>
                                    <th>Casa</th>
                                    <th><button class="button is-danger">Eliminar</button></th>
                                </tr>
                                <tr>
                                    <th>001</th>
                                    <th>Casa</th>
                                    <th><button class="button is-danger">Eliminar</button></th>
                                </tr>
                                <tr>
                                    <th>001</th>
                                    <th>Casa</th>
                                    <th><button class="button is-danger">Eliminar</button></th>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo de Inmueble</th>
                                    <th>Eliminar</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Segundo Dato -->
            <div class="tile is-ancestor">
                <div class="tile is-parent is-vertical">
                    <div class="tile is-child">
                        <p class="title is-4">Tipo de Dato</p>
                    </div>
                    <div class="tile is-parent">
                        <div class="tile is-child">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                        <div class="tile is-child">
                            <button class="button is-fullwidth">Agregar</button>
                        </div>
                    </div>
                    <div class="tile is-child">
                        <table class="table is-striped is-hoverable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo de Inmueble</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>001</th>
                                    <th>Casa</th>
                                    <th><button class="button is-danger">Eliminar</button></th>
                                </tr>
                                <tr>
                                    <th>001</th>
                                    <th>Casa</th>
                                    <th><button class="button is-danger">Eliminar</button></th>
                                </tr>
                                <tr>
                                    <th>001</th>
                                    <th>Casa</th>
                                    <th><button class="button is-danger">Eliminar</button></th>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo de Inmueble</th>
                                    <th>Eliminar</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tercer Dato -->
            <div class="tile is-ancestor">
                <div class="tile is-parent is-vertical">
                    <div class="tile is-child">
                        <p class="title is-4">Tipo de Dato</p>
                    </div>
                    <div class="tile is-parent">
                        <div class="tile is-child">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                        <div class="tile is-child">
                            <button class="button is-fullwidth">Agregar</button>
                        </div>
                    </div>
                    <div class="tile is-child">
                        <table class="table is-striped is-hoverable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo de Inmueble</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>001</th>
                                    <th>Casa</th>
                                    <th><button class="button is-danger">Eliminar</button></th>
                                </tr>
                                <tr>
                                    <th>001</th>
                                    <th>Casa</th>
                                    <th><button class="button is-danger">Eliminar</button></th>
                                </tr>
                                <tr>
                                    <th>001</th>
                                    <th>Casa</th>
                                    <th><button class="button is-danger">Eliminar</button></th>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo de Inmueble</th>
                                    <th>Eliminar</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Cuarto Dato -->
            <div class="tile is-ancestor">
                <div class="tile is-parent is-vertical">
                    <div class="tile is-child">
                        <p class="title is-4">Tipo de Dato</p>
                    </div>
                    <div class="tile is-parent">
                        <div class="tile is-child">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                        <div class="tile is-child">
                            <button class="button is-fullwidth">Agregar</button>
                        </div>
                    </div>
                    <div class="tile is-child">
                        <table class="table is-striped is-hoverable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo de Inmueble</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>001</th>
                                    <th>Casa</th>
                                    <th><button class="button is-danger">Eliminar</button></th>
                                </tr>
                                <tr>
                                    <th>001</th>
                                    <th>Casa</th>
                                    <th><button class="button is-danger">Eliminar</button></th>
                                </tr>
                                <tr>
                                    <th>001</th>
                                    <th>Casa</th>
                                    <th><button class="button is-danger">Eliminar</button></th>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo de Inmueble</th>
                                    <th>Eliminar</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Quinto Dato -->
            <div class="tile is-ancestor">
                <div class="tile is-parent is-vertical">
                    <div class="tile is-child">
                        <p class="title is-4">Tipo de Dato</p>
                    </div>
                    <div class="tile is-parent">
                        <div class="tile is-child">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                        <div class="tile is-child">
                            <button class="button is-fullwidth">Agregar</button>
                        </div>
                    </div>
                    <div class="tile is-child">
                        <table class="table is-striped is-hoverable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo de Inmueble</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>001</th>
                                    <th>Casa</th>
                                    <th><button class="button is-danger">Eliminar</button></th>
                                </tr>
                                <tr>
                                    <th>001</th>
                                    <th>Casa</th>
                                    <th><button class="button is-danger">Eliminar</button></th>
                                </tr>
                                <tr>
                                    <th>001</th>
                                    <th>Casa</th>
                                    <th><button class="button is-danger">Eliminar</button></th>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo de Inmueble</th>
                                    <th>Eliminar</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>

</html>