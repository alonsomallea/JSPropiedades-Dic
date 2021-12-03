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

    <!-- fin header -->

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