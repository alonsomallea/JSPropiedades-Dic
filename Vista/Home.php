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
    <style>
    h1 {
        font-family: Arial, sans-serif;
        color: #FF214F;
    }
    </style>
</head>

<body>
    <!-- Header -->
    <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="Vista/Home.php">
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
                <a class="navbar-item" href="Home.php">
                    Inicio
                </a>

                <a class="navbar-item" href="Servicios.php">
                    Servicios
                </a>

                <a class="navbar-item" href="Contacto.php">
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

    <section class="section">
        <center>
            <h3 class="title is-3">Corredora de Propiedades Jessica ADM Asesorias SPA</h3>
            <center>
    </section>

    <!-- fin header -->
    <!-- Tarjetas Servicios-->

    <section class="section">
        <div class="columns is-centered is-variable is-8">
            <div class="column is-one-quarter">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="../Images/Home/venta.jpg" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                            </div>
                            <div class="media-content">
                                <p class="title is-4">Compra de Propiedades</p>
                                <p class="subtitle is-6">@johnsmith</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                            <a href="#">#css</a> <a href="#">#responsive</a>
                            <br>
                            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                        </div>
                    </div>
                </div>

            </div>
            <div class="column is-one-quarter">

                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="../Images/Home/trato.jpg" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                            </div>
                            <div class="media-content">
                                <p class="title is-4">Venta de Propiedades</p>
                                <p class="subtitle is-6">@johnsmith</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                            <a href="#">#css</a> <a href="#">#responsive</a>
                            <br>
                            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                        </div>
                    </div>
                </div>

            </div>
            <div class="column is-one-quarter">

                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="../Images/Home/arriendo.jpg" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                            </div>
                            <div class="media-content">
                                <p class="title is-4">Arriendo de Propiedades</p>
                                <p class="subtitle is-6">@johnsmith</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                            <a href="#">#css</a> <a href="#">#responsive</a>
                            <br>
                            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- fin -->
    <!-- Tarjetas Propiedades -->
    <section class="section">
        <h1 class="title">Propiedades</h1>
        <h2 class="subtitle">
            <div class="columns is-centered is-variable is-8">
                <div class="column is-one-quarter">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="../Images/Home/house 2.jpg" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Casas</p>
                                </div>
                            </div>

                            <div class="content">
                                Si buscas una casa para comprar o arrendar aqui es la mejor opcion!. <a>@bulmaio</a>.
                                <a href="#">#css</a> <a href="#">#responsive</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-one-quarter">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="../Images/Home/building 2.jpg" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Departamentos</p>
                                </div>
                            </div>

                            <div class="content">
                                Si lo que necesistas es un departamento buscar aqui te ayudara!. <a>@bulmaio</a>.
                                <a href="#">#css</a> <a href="#">#responsive</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-one-quarter">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="../Images/Home/office 2.jpg" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Oficinas</p>
                                </div>
                            </div>

                            <div class="content">
                                Tienes una compañia? te ayudamos a encontrar una oficina perfecta!
                                <a>@bulmaio</a>.
                                <a href="#">#css</a> <a href="#">#responsive</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-one-quarter">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="../Images/Home/mountain 2.jpg" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Terrenos</p>
                                </div>
                            </div>

                            <div class="content">
                                Si tienes planes de construir tu propia casa, busca un terreno aqui!. <a>@bulmaio</a>.
                                <a href="#">#css</a> <a href="#">#responsive</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </h2>
    </section>

    <!-- Fin Tarjetas -->

    <!-- Footer -->
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
                            Empresa dedicada el corretaje de propiedades en la zona del litoral central, especialmente
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
                            <a href="Home.php">Home</a>
                        </div>
                        <div class="block">
                            <a href="Servicios.php">Servicios</a>
                        </div>
                        <div class="block">
                            <a href="Contacto.php">Contacto</a>
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
                href="https://github.com/Buraian00">Bryan Vidal</a> y <a href="https://github.com/alonsomallea">Alonso
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