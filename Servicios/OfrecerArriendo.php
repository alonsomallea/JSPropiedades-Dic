<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <P>
        <title>Jessica ADM Asesorias SPA- Corredora de Propiedades</title>
    </p>

    <!-- Bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-social@2/css/all.min.css">
    <link rel="stylesheet" href="../CSS/estilos.css" title="alternativo">
    <style>
    h1 {
        font-family: Arial, sans-serif;
        color: #FF214F;
    }
    </style>
</head>

<body>
    <!-- Inicio Header -->
    <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="JSP-SEBA/Vista/Home.php">
                <figure class="image is-48x48">
                    <img src="../Images/Global/logo.jpg">
                </figure>
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="../Vista/Home.php">
                    Inicio
                </a>

                <a class="navbar-item" href="../Vista/Servicios.php">
                    Servicios
                </a>

                <a class="navbar-item" href="../Vista/Contacto.php">
                    Contacto
                </a>
            </div>

            <div class="navbar-item">
                <figure>
                    <?php
    date_default_timezone_set("America/Santiago");
    echo date("d/");
    echo date("m/");
    echo date("y  ");?>

                    <label class="Hora" id="displaytime">
                        <script>
                        function myFunc() {
                            var now = new Date();
                            var time = now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
                            document.getElementById('displaytime').innerHTML = time;
                        }
                        setInterval(myFunc, 1000);
                        </script>
                    </label>
                    <br>
                    <label class="Hora" id="displaytime1">
                        <script>
                        function myFunc1() {

                            fecha = new Date();
                            hora = fecha.getHours();

                            if (hora >= 18 && hora < 9) {
                                texto = "Cerrado";
                            }
                            if (hora >= 9 && hora < 18) {
                                texto = "Abierto";
                            }
                            document.getElementById('displaytime1').innerHTML = texto;
                        }
                        </script>
                    </label></br>
                </figure>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <a href="mailto: jspropiedades2020@gmail.com">
                            <figure class="image is-32x32">
                                <img src="../Images/Icons/mail-outline.svg">
                            </figure>
                        </a>
                    </div>

                    <div class="navbar-item">
                        <a href="https://wa.link/uhq317" target="_blank">
                            <figure class="image is-32x32">
                                <img src="../Images/Icons/logo-whatsapp.svg">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
    </nav>
    <!-- Fin Header -->
    <!-- Inicio Propiedades -->
    <main>
        <div class="columns is-mobile is-centered">
            <div class="column is-half">
                <p class="bd-notification is-primary">
                    <code class="html">
                            <center>
                                <h2 class="title">Validador Correo Contraseña </h2>
                            </center>
                            <br>
                            <center>
                                <form action="" class="formulario" id="formulario">
                                    <!-- Grupo: Usuario -->
                                    <div class="formulario__grupo" id="grupo__usuario">
                                        <label for="usuario" class="formulario__label">Usuario</label>
                                        <div class="formulario__grupo-input">
                                            <div class="field">
                                                <p class="control has-icons-left has-icons-right">
                                                    <input class="input is-success" type="text"
                                                        class="formulario__input" name="usuario" id="usuario"
                                                        placeholder="Ejemplo Seba1234">
                                                    <span class="icon is-small is-right">
                                                        <i
                                                            class="formulario__validacion-estado fas fa-times-circle"></i>
                                            </div>
                                        </div>
                                        <p class="formulario__input-error">El Nombre tiene que ser de 4 a 16 dígitos y
                                            solo puede contener numeros, letras y guion bajo.</p>
                                    </div>

                                    <!-- Grupo: Nombre -->
                                    <div class="formulario__grupo" id="grupo__nombre">
                                        <label for="nombre" class="formulario__label">Nombre</label>
                                        <div class="formulario__grupo-input">
                                            <div class="field">
                                                <p class="control has-icons-left has-icons-right">
                                                    <input class="input" class="formulario__input" name="nombre"
                                                        id="nombre" placeholder="Sebastian Mella">
                                                    <span class="icon is-small is-right">
                                                        <i
                                                            class="formulario__validacion-estado fas fa-times-circle"></i>
                                            </div>
                                        </div>
                                        <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y
                                            solo puede contener numeros, letras y guion bajo.</p>


                                        <!-- Grupo: Correo Electronico -->
                                        <div class="formulario__grupo" id="grupo__correo">
                                            <label for="correo" class="formulario__label">Correo Electrónico</label>
                                            <div class="formulario__grupo-input">
                                                <div class="field">
                                                    <p class="control has-icons-left has-icons-right">
                                                        <input class="input" type="email" class="formulario__input"
                                                            name="correo" id="correo" placeholder="correo@correo.com">
                                                        </span>
                                                        <span class="icon is-small is-right">

                                                            <i
                                                                class="formulario__validacion-estado fas fa-times-circle"></i>
                                                </div>
                                                <p class="formulario__input-error">El correo solo puede contener letras,
                                                    numeros, puntos, guiones y guion bajo.</p>
                                            </div>
                                            </span>
                                            </p>
                                        </div>

                                        <!-- Grupo: Teléfono -->
                                        <div class="formulario__grupo" id="grupo__telefono">
                                            <label for="telefono" class="formulario__label">Teléfono</label>
                                            <div class="formulario__grupo-input">
                                                <div class="field is-horizontal"> <a class="button is-static">
                                                        +56
                                                    </a>
                                                    </p>
                                                    <p class="control is-expanded">
                                                    <div class="field">
                                                        <p class="control has-icons-left has-icons-right">
                                                            <input class="input" type="tel" class="formulario__input"
                                                                name="telefono" id="telefono" placeholder="4491234567">
                                                            <span class="icon is-small is-right">
                                                                <i
                                                                    class="formulario__validacion-estado fas fa-times-circle"></i>
                                                    </div></span>
                                                </div>
                                                <p class="formulario__input-error">El telefono solo puede contener
                                                    numeros y el maximo son 14 dígitos.</p>
                                            </div>
                                        </div>
                                        </span>
                                        </p>
                                    </div>
                                    <div class="field">
  <label class="label">Subject</label>
  <div class="control">
    <div class="select">
      <select>
        <option>Select dropdown</option>
        <option>With options</option>
      </select>
    </div>
  </div>
</div>

<div class="field">
  <label class="label">Message</label>
  <div class="control">
    <textarea class="textarea" placeholder="Textarea"></textarea>
  </div>
</div>


                                    <!-- Grupo: Terminos y Condiciones -->
                                    <div class="formulario__grupo" id="grupo__terminos">
                                        <label class="formulario__label">
                                            <input class="formulario__checkbox" type="checkbox" name="terminos"
                                                id="terminos">
                                            Acepto los Terminos y Condiciones
                                        </label>
                                    </div>

                                    <div class="formulario__mensaje" id="formulario__mensaje">
                                        <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Revise los
                                            datos ingresados </p>
                                    </div>

                                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                                        <button type="submit" class="formulario__btn">Enviar</button>
                                        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">
                                            Validacion Completada</p>
                                    </div>
                                </form>
    </main>
    </form>
    </div>
    </div>
    </div>
    </section>
  </code><br>
                </p>
            </div>
        </div>
        <!-- Footer -->
        <section class="section">
            <footer class="footer">
                <div class="columns">
                    <div class="column">
                        <section class=" section">
                            <h1 class="title">Nosotros</h1>
                            <figure class="image is-128x128">
                                <img src="../Images/Global/logo.jpg">
                            </figure>

                            <div class="content is-normal">
                                <h4 class="title">Jessica ADM Asesorias SPA</h4>
                                <p>
                                    Empresa dedicada el corretaje de propiedades en la zona del litoral central,
                                    especialmente
                                    en la provincia de San Antonio
                                </p>
                            </div>
                        </section>
                    </div>
                    <div class="column">
                        <section class=" section">
                            <h1 class="title">Mapa del Sitio</h1>
                            <br>
                            <div class="content is-normal">
                                <div class="block">
                                    <a href="../Vista/Home.php">Home</a>
                                </div>
                                <div class="block">
                                    <a href="../Vista/Servicios.php">Servicios</a>
                                </div>
                                <div class="block">
                                    <a href="../Vista/Contacto.php">Contacto</a>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="column">
                        <section class="section">
                            <h1 class="title">Contáctanos!</h1>
                            <br>
                            <article class="media">
                                <a href="https://goo.gl/maps/oiVP7FFF4fEV4V3d7" target="_blank" class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="../Images/Icons/location-outline.svg">
                                    </figure>
                                </a>
                                <div class="media-content">
                                    Casa Concha 1280 Barrancas, San Antonio, V Region de Valparaiso 7005
                                </div>
                            </article>

                            <br>
                            <article class="media">
                                <a href="https://wa.link/uhq317" target="_blank" class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="../Images/Icons/call-outline.svg">
                                    </figure>
                                </a>
                                <div class="media-content">
                                    +56 9 7651 7005
                                </div>
                            </article>
                            <br>
                            <article class="media">
                                <a href="mailto: jspropiedades2020@gmail.com" class="media-left">
                                    <figure class="image is-32x32">
                                        <img src="../Images/Icons/mail-outline.svg">
                                    </figure>
                                </a>
                                <div class="media-content">
                                    jspropiedades2020@gmail.com
                                </div>
                            </article>
                            <br>
                            <br>
                            <div class="columns">
                                <div class="column">
                                    <a href="https://cl.linkedin.com/in/jessica-cecilia-sánchez-muñoz-599b3b1a3">
                                        <figure class="image is-32x32">
                                            <img src="../Images/Icons/logo-linkedin.svg">
                                        </figure>
                                    </a>
                                </div>
                                <div class="column">
                                    <a href="https://www.facebook.com/jspropiedadesadm">
                                        <figure class="image is-32x32">
                                            <img src="../Images/Icons/logo-facebook.svg">
                                        </figure>
                                    </a>
                                </div>
                                <div class="column">
                                    <a href="https://www.instagram.com/corredorajessica/?hl=es-la">
                                        <figure class="image is-32x32">
                                            <img src="../Images/Icons/logo-instagram.svg">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </footer>

            <!-- Copyright -->
            <div class="content has-text-centered">
                <p>
                    <strong>Jessica ADM Asesorias SPA</strong> desarrollado por <a
                        href="https://github.com/Sebastian1412">Sebastian Mella</a>, <a
                        href="https://github.com/Buraian00">Bryan Vidal</a> y <a
                        href="https://github.com/alonsomallea">Alonso
                        Mallea</a>.
                    <strong>Copyright © 2021 Jessica Sánchez Muñoz </strong>
                </p>
            </div>

            <!-- NavBar JavaScript -->
            <script>
            document.addEventListener('DOMContentLoaded', () => {

                // Get all " navbar-burger" elements const
                $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'),
                    0); // Check if there are any navbar burgers
                if ($navbarBurgers.length > 0) {

                    // Add a click event on each of them
                    $navbarBurgers.forEach(el => {
                        el.addEventListener('click', () => {

                            // Get the target from the "data-target" attribute
                            const target = el.dataset.target;
                            const $target = document.getElementById(target);

                            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                            el.classList.toggle('is-active');
                            $target.classList.toggle('is-active');

                        });
                    });
                }

            });
            </script>
</body>

</html>
<script src="JavaScript/JS.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="../JavaScript/formulario.js"></script>