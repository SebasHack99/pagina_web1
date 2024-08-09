<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARService</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="./images/icono.png">
    <link rel="icon" href="./Imagenes/icon-1.svg">
    <link rel="stylesheet" href=".">
    <link rel="stylesheet" href="Css/styles.css">
    <link rel="stylesheet" name="inicio" href="./index.html">
</head>

<body>

    <div class="container">

        <nav class="nav-sites ">
            <div class="nav-logo">
                <a href="./index.html"><img src="Imagenes/logo.svg"></a>
            </div>
            <div class="nav-list">
                <ul>
                    <li><a href="#">INICIO</a></li>
                    <li><a href="#">NOSOTROS</a></li>
                    <li><a href="#">SERVICIOS</a></li>
                    <li><a href="#">CONTACTO</a></li>
                </ul>
            </div>
        </nav>

        <section class="about ">
            <div class="about-txt">
                <h2>INOVACTEC</h2>
                <p>
                    En la vanguardia de la revolución tecnológica, somos el puente entre tu visión y la realidad
                    digital. Somos más que una empresa; somos la chispa que enciende la innovación. Nos especializamos
                    en la creación, comercialización y desarrollo de tecnologías web que desafían los límites y abren
                    nuevas fronteras en el ciberespacio. Desde el diseño elegante hasta la funcionalidad sofisticada,
                    convertimos tus ideas en experiencias digitales cautivadoras.
                </p>
                <br>
                <p>
                    Además, somos expertos en la creación de bases de datos robustas que alimentan el corazón de tus
                    aplicaciones y sistemas de información. Cada línea de código es una obra maestra y cada dato es un
                    pilar de la evolución. La conexión con tus datos es más que un simple enlace; es la evolución, es la
                    innovación, ¡es el futuro en tus manos!
                </p>
            </div>
            <div class="about-img">
                <img src="Imagenes/Asset 3.svg" alt="portada">
            </div>
        </section>

        <section class="about ">
            <div class="about-img">
                <img src="Imagenes/server.svg" alt="">
            </div>
            <div class="about-txt">
                <h2>NOSOTROS</h2>
                <p>
                    En nuestro concesionario, encontrará una selección impecable de vehículos de calidad, un proceso de
                    compra transparente y un servicio excepcional. Nos comprometemos a hacer que su experiencia de
                    compra sea fácil y satisfactoria.
                </p>
                <br>
                <p>
                    Elija nuestro concesionario para una experiencia de compra sin complicaciones y un automóvil que
                    cumpla con sus expectativas. ¡Visítenos hoy y descubra la diferencia!
                </p>
            </div>
        </section>

        <main class="services">
            <h2>SERVICIOS</h2>
            <div class="services-content">
                <div class="services-1">
                    <h3><a href=""><img src="./Imagenes/icon-1.svg" alt="">
                            <br>
                            <br> Desarrollo Web</a></h3>
                </div>
                <div class="services-1">
                    <h3><a href=""><img src="./Imagenes/icon-2.svg" alt="">
                            <br>
                            <br>Lenguajes de programacion</a></h3>
                </div>
                <div class="services-1">
                    <h3><a href=""><img src="./Imagenes/icon-3.svg" alt="">
                            <br>
                            <br> Bases de datos</a></h3>
                </div>
            </div>
        </main>
        <section class="formulario container">
            <form method="post" autocomplete="off">
                <h2>¡CONTACTANOS!</h2>
                <div class="input-group">
                    <div class="input-container">
                        <input type="text" name="name" placeholder="Nombre">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" placeholder="Correo">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="input-container">
                        <input type="text" name="service" placeholder="Servicios">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="input-container">
                        <textarea name="message" placeholder="Escribenos y nos pondremos en contacto"></textarea>
                    </div>
                    <input type="submit" name="send" class="btn" onclick="myFunction()">
                </div>
            </form>
        </section>
        <footer class="footer-content container">
            <div class="link">
                <p>© 2024 Todos los derechos reservados: CARService®</p>
            </div>
    </div>
    </footer>
    <?php
            include("send.php");
        ?>
    <script>
    function myFunction() {
        window.location.href = "http://localhost/paginaWeb"
    }
    </script>
    </div>
</body>

</html>