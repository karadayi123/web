
<!DOCTYPE html>
<HTML lang="es">

<HEAD>
    <meta charset="utf-8">
    <TITLE>Biblioteca UTP</TITLE>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/Noticias.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://kit.fontawesome.com/2f6fb16839.js" crossorigin="anonymous"></script>


</HEAD>

<BODY>
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
        <section id="noticias">
            <h2>NOTICIAS</h2>
        </section>
        <section id="servicios">
            <h2>SERVICIOS</h2>
            <div class="contenedor">
                <h3>Catálogo</h3>
                <P>Consulta de todos los recursos de información que tiene disponible las bibliotecas de la
                    UTP.
                </P>
                <a href="Catalogo.html">Abrir catálogo</a>
            </div>
            <hr>

            <div class="contenedor">
                <h3>Base de Datos</h3>
                <P>Encuentra información académica en línea a través de libros electrónicos y bases de datos.
                </P>
                <a href="Bases.html">Abrir base de datos</a>

            </div>
            <hr>

            <div class="contenedor">
                <h3>Repositorio Institucional</h3>
                <P>Plataforma que recopila, gestiona, difunde y preserva la producción académica y científica digital
                    producidas por los miembros de la UTP a través de una colección organizada, preferiblemente de
                    acceso abierto e interoperable.
                </P>
                <a href="https://repositorio.utp.edu.pe/">Abrir repositorio</a>

            </div>

        </section>
        <section id="preguntas">
            <h2>PREGUNTAS FRECUENTES</h2>



            <div class="faq">
                <button class="accordion">
                    ¿Quiénes pueden acceder a la Biblioteca?
                </button>
                <div class="pannel">
                    <p>
                        Todos los estudiantes, profesores y personal administrativo de la universidad tienen acceso a la
                        Biblioteca.
                        Para ingresar, solo necesitas presentar tu identificación de la universidad
                    </p>
                </div>
            </div>

            <div class="faq">
                <button class="accordion">
                    ¿Puedo descargar libros electrónicos?
                    
                </button>
                <div class="pannel">
                    <p>
                        Sí, la biblioteca ofrece una amplia selección de libros electrónicos disponibles para su
                        descarga.
                        Puedes acceder a ellos desde la plataforma virtual de la biblioteca
                    </p>
                </div>
            </div>

            <div class="faq">
                <button class="accordion">
                    ¿Cómo ingreso a la biblioteca virtual desde Canvas?
                </button>
                <div class="pannel">
                    <p>Para acceder a la biblioteca virtual desde Canvas, sigue estos pasos:</p>
                    <p> * Inicia sesión en tu cuenta de Canvas.</p>
                    <p> * Busca el enlace o la pestaña que te dirige a la biblioteca virtual.</p>
                    <p> * Haz clic en el enlace para acceder a la plataforma de la biblioteca.</p>
                    <p> * Ingresa tus credenciales de inicio de sesión de la universidad cuando se te solicite.</p>

                </div>
            </div>

            <div class="faq">
                <button class="accordion">
                    El link en Canvas me deriva a una plataforma (por ejemplo e-libro, ebook7/24, etc.) en el cual al
                    colocar mis credenciales no puedo ingresar.
                </button>
                <div class="pannel">
                    <p>
                        Si tienes dificultades para ingresar a la plataforma de la biblioteca desde Canvas, te
                        recomiendo
                        que contactes al personal de soporte técnico de la universidad.
                        Ellos podrán ayudarte a resolver cualquier problema técnico que estés experimentando y
                        asegurarse de
                        que puedas acceder a la biblioteca virtual sin problemas.
                    </p>
                </div>
            </div>

            <div class="faq">
                <button class="accordion">
                    Si no encuentro el libro en el catálogo de Biblioteca ¿qué puedo hacer?
                </button>
                <div class="pannel">
                    <p>
                        Puedes solicitar el libro a través del servicio de préstamo interbibliotecario de la
                        universidad,
                        que te permitirá obtener el libro de otra biblioteca.
                    </p>
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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="javascript/noticias.js"></script>
    <script src="javascript/nav.js"></script>
</BODY>

</HTML>