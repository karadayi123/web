
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIBLIOTECA UTP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/Solicitud.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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

    <div>
        <h2 class="lato-thin">Retiro de Libro</h2><br>
        <iframe style="margin-left: 20px;" width="650" height="330" src="https://www.youtube.com/embed/D8lD55WPHak" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <h2 class="lato-thin">Información Personal</h2><br>
    <div class="formularios">
        <form id="solicitudForm" action="php/reciboForm.php" method="POST" class="row g-3">
            <label for="nombre">Nombre completo del estudiante:</label><br />
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required /><br /><br />

            <label for="identificacion">Número de identificación estudiantil:</label><br />
            <input type="text" id="identificacion" name="identificacion" placeholder="Código UTP" required /><br /><br />

            <label for="correo">Correo electrónico universitario:</label><br />
            <input type="email" id="correo" name="correo" placeholder="Correo" required /><br /><br />

            <label for="telefono">Número de teléfono:</label><br />
            <input type="tel" id="telefono" name="telefono" placeholder="Telefono" required /><br /><br />

            <h2 class="lato-thin">Detalles del Libro</h2><br />
            <label for="titulo">Título del libro solicitado:</label><br />
            <input type="text" id="titulo" name="titulo" placeholder="Titulo" required /><br /><br />

            <label for="autor">Autor del libro:</label><br />
            <input type="text" id="autor" name="autor" placeholder="Autor" required /><br /><br />

            <label for="fecha">Fecha de la solicitud:</label><br />
            <?php
                date_default_timezone_set("America/Lima");
                function fecha_espanol_larga() {
                    $fecha_dia = date("d");
                    $fecha_mes = date("m");
                    $fecha_year = date("Y");
                    $dia_semana = ["Monday"=>"Lunes", "Tuesday"=>"Martes", "Wednesday"=>"Miércoles", "Thursday"=>"Jueves", "Friday"=>"Viernes", "Saturday"=>"Sábado", "Sunday"=>"Domingo"];
                    $meses_year = ["01"=>"Enero", "02"=>"Febrero", "03"=>"Marzo", "04"=>"Abril", "05"=>"Mayo", "06"=>"Junio", "07"=>"Julio", "08"=>"Agosto", "09"=>"Septiembre", "10"=>"Octubre", "11"=>"Noviembre", "12"=>"Diciembre"];
                    $fecha_final = $dia_semana[date("l")] . " " . $fecha_dia . " de " . $meses_year[$fecha_mes] . " del " . $fecha_year;
                    return $fecha_final;
                }
                echo fecha_espanol_larga();
            ?><br /><br />

            <label for="fecha_entrega">Fecha de entrega:</label><br />
            <input type="date" id="fecha_entrega" name="fecha_entrega" required /><br /><br />

            <input type="checkbox" id="acepto" name="acepto" required>
            <label id="acepto" for="acepto">Acepto las condiciones y servicios</label><br /><br />

            <button class="enviar-form" type="submit">Enviar</button>
        </form>
    </div>

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
                    <a href="https://www.youtube.com/channel/UCLQEBv7WN0SgOFD_nRLraRQ" class="fa-brands fa-youtube"
                        target="_blank"></a>
                    <a href="https://www.linkedin.com/school/utp-universidad-tecnologica-del-peru/?originalSubdomain=pe"
                        class="fa-brands fa-linkedin" target="_blank"></a>
                    <a href="https://www.instagram.com/universidadutp/" class="fa-brands fa-instagram"
                        target="_blank"></a>
                </div>
            </div>

        </div>

        <div class="footer-derechos">
            <p>Todos los derechos reservados - Arantxa Condor, Alexis Julca, Nicolas Wollmann, Jeanpier Tavara, Claudio
                Sepulveda &copy;</p>
        </div>

    </footer>
    <script src="javascript/nav.js"></script>

</body>

</html>
