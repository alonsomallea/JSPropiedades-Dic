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

                    <label id="display-time">
                        <script>
                        function myFunc() {
                            var now = new Date();
                            var time = now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
                            document.getElementById('display-time').innerHTML = time;
                        }
                        setInterval(myFunc, 1000);
                        </script>
                    </label>
                    <br><label>Cerrado</label></br>
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
    <!--Inicio Hero-->
    <section class="section is-small">
        <h1 class="title">Jessica Sanchez</h1>
        <div class="columns">
            <div class="column">
                <seccion class="hero">
                    <div class="hero-body">
                        <p class="title">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="https://bulma.io/images/placeholders/1280x960.png"
                                        alt="Placeholder image">
                                </figure>
                            </div>
                        </div>
                    </div>
            </div>
            </seccion>
            <div class="column">
                <seccion class="hero">
                    <div class="hero-body">
                        <p class="title">
                        <div class="card">
                            <div class="card-content">
                                <div class="content">
                                    <div class="content is-small">
                                        <h1>Hello World</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan,
                                            metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo
                                            nibh eu lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel
                                            erat vel, interdum mattis neque.</p>
                                        <h2>Second level</h2>
                                        <p>Curabitur accumsan turpis pharetra <strong>augue tincidunt</strong> blandit.
                                            Quisque condimentum maximus mi, sit amet commodo arcu rutrum id. Proin
                                            pretium urna vel cursus venenatis. Suspendisse potenti. Etiam mattis sem
                                            rhoncus lacus dapibus facilisis. Donec at dignissim dui. Ut et neque nisl.
                                        </p>
                                        <ul>
                                            <li>In fermentum leo eu lectus mollis, quis dictum mi aliquet.</li>
                                            <li>Morbi eu nulla lobortis, lobortis est in, fringilla felis.</li>
                                            <li>Aliquam nec felis in sapien venenatis viverra fermentum nec lectus.</li>
                                            <li>Ut non enim metus.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </seccion>
    </section>
    <section class="section is-medium">
        <h1 class="title">Jessica Sanchez</h1>
        <div class="columns">
            <div class="column">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.571155361936!2d-71.6116905493019!3d-33.590482180639555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662391875747ab3%3A0x2d6fb565cf22d5b8!2sJ.S.PROPIEDADES%20SpA!5e0!3m2!1ses-419!2scl!4v1637638733341!5m2!1ses-419!2scl"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="column">
                <div class="card">
                    <figure>
                        <div class="card-content">
                            <div class="content">
                                <br>
                                <div class="content is-small">
                                    <h1>Ubicación</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus
                                        ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu
                                        lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel,
                                        interdum mattis neque.</p>
                                    <h2>Second level</h2>
                                    <p>Curabitur accumsan turpis pharetra <strong>augue tincidunt</strong> blandit.
                                        Quisque condimentum maximus mi, sit amet commodo arcu rutrum id. Proin pretium
                                        urna vel cursus venenatis. Suspendisse potenti. Etiam mattis sem rhoncus lacus
                                        dapibus facilisis. Donec at dignissim dui. Ut et neque nisl.</p>
                                    <ul>
                                        <li>In fermentum leo eu lectus mollis, quis dictum mi aliquet.</li>
                                        <li>Morbi eu nulla lobortis, lobortis est in, fringilla felis.</li>
                                        <li>Aliquam nec felis in sapien venenatis viverra fermentum nec lectus.</li>
                                        <li>Ut non enim metus.</li>
                                    </ul>
                                </div>orem ipsum leo risus, porta ac consectetur ac, vestibulum at eros. Donec id elit
                                non mi
                                porta gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient
                                montes,
                                nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum.
                            </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Hero-->
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
                            <a href="Home.php" target="_blank">
                                <figure class="image is-32x32">
                                    <img src="../Images/Icons/logo-linkedin.svg">
                                </figure>
                            </a>
                        </div>
                        <div class="column">
                            <a href="Home.php" target="_blank">
                                <figure class="image is-32x32">
                                    <img src="../Images/Icons/logo-facebook.svg">
                                </figure>
                            </a>
                        </div>
                        <div class="column">
                            <a href="Home.php" target="_blank">
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
            0); // Check if there
        are any navbar burgers
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