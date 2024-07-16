<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biblioteca UTP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
    <link rel="stylesheet" type="text/css" href="css/Informacion.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
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
                            echo '<a>Hola, ' . $nombre . '</a>';
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
    <div class="div">
        <main>

            <section class="video">
                <h2>Video Informativo</h2>
                <iframe src="https://www.youtube.com/embed/D8lD55WPHak" frameborder="0" allowfullscreen></iframe>
            </section>

            <div class="contenedor1">
                <section id="Horario">
                    <h3>Horario:</h3>
                    <p>Horario de Atención:</p>
                    <p>De lunes a sábado de 8:00 am a 10:00 pm</p>
                    <p>Domingo de 8:00 am a 1:00 pm</p>
                </section>

                <section id="Ubicación_chimbote">
                    <h3>Ubicación sede Chimbote:</h3>
                    <p>Km 424 Panamericana Norte, Calle 56 S/N, Nuevo Chimbote, 02710</p>
                    <p>Sotano 1</p>
                </section>
            </div>

            <section id="ubicaciones">
                <h3>Sedes:</h3><br>
                <div class="caja">
                    <div class="contenedor">
                        <img src="img/LimaCentroTorreArequipa.svg">
                        <div class="datos">
                            <h4>Biblioteca Lima Centro-Torre Arequipa</h4>
                            <p>Jirón Hernán Velarde N° 289 con Av. Arequipa 265</p>
                            <span>De lunes a sábado de 8:00 am a 10:00 pm</span>
                        </div>
                        <div class="info">
                            <div class="telefono">
                                <span class="material-symbols-outlined"> call</span>
                                <span>315-9600 Opción 1</span>
                            </div>
                            <div class="piso">
                                <span class="material-symbols-outlined">
                                    near_me
                                </span>
                                <span>Piso 3</span>
                            </div>
                        </div>

                    </div>
                    <div class="contenedor">
                        <img src="img/CentroTorrePacifico.svg">
                        <div class="datos">
                            <h4>Biblioteca Centro-Torre Pacifico</h4>
                            <p>Av. Arequipa 660</p>
                            <span>De lunes a sábado de 8:00 am a 10:00 pm</span>

                        </div>
                        <div class="info">
                            <div class="telefono">
                                <span class="material-symbols-outlined"> call</span>
                                <span>315-9600 Opción 1</span>
                            </div>
                            <div class="piso">
                                <span class="material-symbols-outlined">
                                    near_me
                                </span>
                                <span>Piso 11</span>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor">
                        <img src="img/LimaSur.svg">
                        <div class="datos">
                            <h4>Biblioteca Campus Lima Sur</h4>
                            <p>Panamericana Sur, Km 16, Villa El Salvador</p>
                            <span>De lunes a sábado de 8:00 am a 10:00 pm</span>
                        </div>
                        <div class="info">
                            <div class="telefono">
                                <span class="material-symbols-outlined"> call</span>
                                <span>315-9600 Opción 1</span>
                            </div>
                            <div class="piso">
                                <span class="material-symbols-outlined">
                                    near_me
                                </span>
                                <span>Piso 4</span>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor">
                        <img src="img/LimaNorte.svg">
                        <div class="datos">
                            <h4>Biblioteca Campus Lima Norte</h4>
                            <p>Av. Alfredo Mendiola 6535 y 6541 / Jr. San Lino 264-270 Parcelación Semirústica
                                Residencial
                                Santa Luisa II Etapa, Piso 3, Los Olivos, Lima</p>
                            <span>De lunes a sábado de 8:00 am a 10:00 pm</span>

                        </div>
                        <div class="info">
                            <div class="telefono">
                                <span class="material-symbols-outlined"> call</span>
                                <span>315-9600 Opción 1</span>
                            </div>
                            <div class="piso">
                                <span class="material-symbols-outlined">
                                    near_me
                                </span>
                                <span>Piso 3</span>
                            </div>
                        </div>
                    </div>

                    <div class="contenedor">
                        <img src="img/Ate.svg">
                        <div class="datos">
                            <h4>Biblioteca Campus Ate</h4>
                            <p>Pista Lima Chosica, Carretera Central, Lote 96-E</p>
                            <span>De lunes a sábado de 8:00 am a 10:00 pm</span>

                        </div>
                        <div class="info">
                            <div class="telefono">
                                <span class="material-symbols-outlined"> call</span>
                                <span>315-9600 Opción 1</span>
                            </div>
                            <div class="piso">
                                <span class="material-symbols-outlined">
                                    near_me
                                </span>
                                <span>Piso 5</span>
                            </div>
                        </div>
                    </div>

                    <div class="contenedor">
                        <img src="img/SJL.svg">
                        <div class="datos">
                            <h4>Biblioteca Campus SJL</h4>
                            <p>Av. El Sol N° 265 Mz. G, Lt. 14 - Urb. Canto Grande, Piso 4, Lima</p>
                            <span>De lunes a viernes de 8:00 am a 10:00 pm</span>
                            <span>Sábado de 8:00 am a 9:30 pm</span>

                        </div>
                        <div class="info">
                            <div class="telefono"><span class="material-symbols-outlined"> call</span>
                                <span>315-9600 Opción 1</span>
                            </div>
                            <div class="piso">
                                <span class="material-symbols-outlined">
                                    near_me
                                </span>
                                <span>Piso 4</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
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
                        <span class="material-symbols-outlined">call</span>
                        <p>Provincias 0801-1-4876</p>
                    </div>
                </div>
                <br>
                <div>
                    <h4>Síguenos en:</h4>
                    <a href="https://www.facebook.com/Biblioteca.UTP/" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/explore/locations/341381526923264/biblioteca-utp/?hl=es" class="fa fa-instagram"></a>
                    <a href="https://www.linkedin.com/school/universidad-tecnologica-del-peru/?originalSubdomain=pe" class="fa fa-linkedin"></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer-3">
            <h4>Algunos derechos reservados © 2023 Universidad Tecnológica del Perú | UTP</h4>
        </div>
    </footer>
    <script src="javascript/nav.js"></script>
</body>
</html>
