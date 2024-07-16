
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biblioteca UTP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        ref="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
    <link rel="stylesheet" type="text/css" href="css/Areas.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://kit.fontawesome.com/2f6fb16839.js" crossorigin="anonymous"></script>
</head>

<body>
<header>
        <nav class="nav">
            <div class="nav__bar">
                <a href="Informacion.php">
                    <img class="nav__img" src="img/UTP+biblio.svg" alt="logo">
                </a>
                <ul class="nav__ul">
                    <li class="nav__li">
                        <a href="Informacion.php">Información general</a>
                    </li>
                    <li class="nav__li">
                        <a href="Areas.php">Áreas de la Biblioteca</a>
                    </li>
                    <li class="nav__li">
                        <a href="Catalogo.php">Catálogo</a>
                    </li>
                    <li class="nav__li">
                        <a href="Solicitud.php">Solicitud de libros</a>
                    </li>
                    <li class="nav__li">
                        <a href="Bases.php">Bases de datos</a>
                    </li>
                    <li class="nav__li">
                        <a href="Noticias.php">Noticias</a>
                    </li>
                    <li class="nav__button">
                        <?php
                        session_start();
                        if (isset($_SESSION['nombre'])) {
                            $nombre = $_SESSION['nombre'];
                            echo '<div class="nav__user">';
                            echo '<i class="fa-regular fa-user"></i>';
                            echo '<span>Hola, ' . $nombre . '</span>';
                            echo '<div class="nav__user-menu">';
                            echo '<a href="php/cerrar.php">Cerrar sesión</a>';
                            echo '</div>';
                            echo '</div>';
                        } else {
                            header("Location: login.php");
                            exit;   
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <div class="nav__responsive-bar">
                <div class="nav__responsive-menu" id="nav__responsive-menu">
                    <span class="material-symbols-outlined abrir">menu</span>
                    <span class="material-symbols-outlined cerrar">close</span>
                </div>
                <div class="nav__responsive-img">
                    <a href="Informacion.php">
                        <img src="img/UTP+biblio.svg" alt="logo">
                    </a>
                </div>
                <?php
                if (isset($_SESSION['nombre'])) {
                    $nombre = $_SESSION['nombre'];
                    echo '<div class="nav__user">';
                    echo '<i class="fa-regular fa-user"></i>';
                    echo '<span>Hola, ' . $nombre . '</span>';
                    echo '<div class="nav__user-menu">';
                    echo '<a href="php/cerrar.php">Cerrar sesión</a>';
                    echo '</div>';
                    echo '</div>';
                } else {
                    header("Location: login.php");
                    exit;   
                }
                ?>
            </div>
            <ul class="nav__responsive-ul" id="nav__responsive-ul">
                <li class="nav__responsive-li">
                    <span class="material-symbols-outlined">info</span>
                    <a href="Informacion.php">Información general</a>
                </li>
                <li class="nav__responsive-li">
                    <span class="material-symbols-outlined">apartment</span>
                    <a href="Areas.php">Áreas de la Biblioteca</a>
                </li>
                <li class="nav__responsive-li">
                    <span class="material-symbols-outlined">book_2</span>
                    <a href="Catalogo.php">Catálogo</a>
                </li>
                <li class="nav__responsive-li">
                    <span class="material-symbols-outlined">description</span>
                    <a href="Solicitud.php">Solicitud de libros</a>
                </li>
                <li class="nav__responsive-li">
                    <span class="material-symbols-outlined">database</span>
                    <a href="Bases.php">Bases de datos</a>
                </li>
                <li class="nav__responsive-li">
                    <span class="material-symbols-outlined">newspaper</span>
                    <a href="Noticias.php">Noticias</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Areas de la biblioteca</h2>
            <div class="caja">

                <div class="contenedor">
                    <div class="contenedor_img">
                        <img class="imagen" src="img/biblioteca.jpg">
                    </div>
                    <div class="contenedor_texto">
                        <h4>Sala de lectura</h4>
                        <p>Ubicación donde podras leer o realizar tus tareas</p>
                    </div>
                    
                </div>                
                <div class="contenedor">
                    <div class="contenedor_img">
                        <img class="imagen" src="img/cubiculos.jpg">
                    </div>
                    <div class="contenedor_texto">
                        <h4>Sala grupal</h4>
                        <p>Ubicación donde podras realizar tus tareas grupales previa reserva</p>
                    </div>
                    
                </div>               

            </div>
                
        </section>
    


    </main>

    <footer class="footer">
        <div class="footer-1">
            <div class="footer-img">

                <img src="img/UTP+biblio.svg" alt="Imagen" width="145" /><br />

            </div>

            <div class="footer-contacto">

                <h4>Contáctanos</h4><br>

                <p>Servicio de atención al estudiante (SAE)</p><br>

                <div class="footer-num">
                    <div class="footer-num1">
                        <span class="material-symbols-outlined">call</span>
                        <p>Lima (01) 315 9600</p>

                    </div>
                    <div class="footer-num2">
                        <span class="material-symbols-outlined"> call</span>
                        <p>Provincia 0801 19600 (opción 1-1)</p>

                    </div>

                </div>

            </div>

            <div class="footer-2">
                <div class="footer-enlaces">
                    <h4>Enlaces informativos</h4><br>
                    <a href="#">Políticas de privacidad</a>
                    <a href="#">Términos y condiciones</a>

                </div>
                <div class="footer-redes">
                    <h4>Siguenos en nuestras redes</h4><br>
                    <a href="https://www.facebook.com/UTP.Peru/" class="fa-brands fa-facebook" target="_blank"></a>
                    <a href="https://www.youtube.com/channel/UCLQEBv7WN0SgOFD_nRLraRQ" class="fa-brands fa-youtube" target="_blank"></a>
                    <a href="https://www.linkedin.com/school/utp-universidad-tecnologica-del-peru/?originalSubdomain=pe" class="fa-brands fa-linkedin" target="_blank"></a>
                    <a href="https://www.instagram.com/universidadutp/" class="fa-brands fa-instagram" target="_blank"></a>
                </div>
            </div>

        </div>

        <div class="footer-derechos">
            <p>Todos los derechos reservados - Arantxa Condor, Alexis Julca, Nicolas Wollmann, Jeanpier Tavara, Claudio Sepulveda &copy;</p>
        </div>

    </footer>

    <script src="java.js"></script>
    <script src="javascript/nav.js"></script>
</body>

</html>