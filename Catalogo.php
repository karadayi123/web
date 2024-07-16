
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FORMULARIO</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link ref="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/Catalogo.css">
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


<h2 id="catalogo">Catálogo</h2>
<form class="buscador" method="get" action="Catalogo.php">
    <input type="text" id="search" name="search" placeholder="Buscar libro...">
    <button type="submit">Buscar</button>
</form>


<?php

$arraylibros = [
    [
        "titulo" => "Química: la ciencia central",
        "autor" => "Theodore L. Brown",
        "fecha" => '1993',
        "libroimagen" => '<img src="https://images-na.ssl-images-amazon.com/images/P/9702604680.01.TZZZZZZZ.jpg", width="70" height="95">'
    ],

    [
        "titulo" => "Introduccion a Las Finanzas",
        "autor" => "Alfonso Leopoldo Ortega Castro",
        "fecha" => '2007',
        "libroimagen" =>'<img src="https://images-na.ssl-images-amazon.com/images/P/9701067223.01.TZZZZZZZ.jpg", width="70" height="95">'
    ],

    [
        "titulo" => "Introducción a php 5",
        "autor" => "Norwich & Barston",
        "fecha" => '2005',
        "libroimagen" => '<img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQ4JiY3umCT6MtIooMAMGN93PhqBDNVko_I-CeO1RTnTHXLZOh3", width="70" height="95">'
    ],

    [
        "titulo" => "Estructuras de datos y algoritmos",
        "autor" => "Robert Lafore",
        "fecha" => '2018',
        "libroimagen" => '<img src="https://m.media-amazon.com/images/I/71CIfM01csL._UX250_.jpg", width="70" height="95">'
    ],
    
    [
        "titulo" => "Gestión de Proyectos",
        "autor" => "Harold Kerzner",
        "fecha" => '2013',
        "libroimagen" => '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxdUBTHTcz6A9Y2Cd3u9e_esQp5BPTjqUHnQ&s", width="70" height="95">'
    ],

    [
        "titulo" => "Desarrollo Web con HTML y CSS",
        "autor" => "Jon Duckett",
        "fecha" => '2014',
        "libroimagen" => '<img src="https://img.perlego.com/books/RM_Books/wiley_hlvwyirv/9781118206911.jpg", width="70" height="95">'
    ],

    [
        "titulo" => "Programación en Python",
        "autor" => "Guido van Rossum",
        "fecha" => '2020',
        "libroimagen" => '<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSOSgCZ7zXRZNBZ64OwezrBxR8Xrb1RC2ROOhGNMeCjKQS0L-N-xV6iHX2D6k4ceX39u9pRRtVY9_1ej2IyAl6Yqst5J4XbuUBz2POWD9Px7_n52pNhz0Uf&usqp=CAc", width="70" height="95">'
    ],    

    [
        "titulo" => "Negocios internacionales ambientes y operaciones",
        "autor" => "Daniels, John D",
        "fecha" => '2013',
        "libroimagen" => '<img src="https://images-na.ssl-images-amazon.com/images/P/6073221606.01.MZZZZZZZ.jpg", width="70" height="95">'
    ],

    [
        "titulo" => "Estadística",
        "autor" => "Triola, Mario F",
        "fecha" => '2009',
        "libroimagen" => '<img src="https://images-na.ssl-images-amazon.com/images/P/970261287X.01.MZZZZZZZ.jpg", width="70" height="95">'
    ],

    [
        "titulo" => "Marketing",
        "autor" => "Kotler, Philip",
        "fecha" => '2012',
        "libroimagen" => '<img src="https://images-na.ssl-images-amazon.com/images/P/6073214200.01.MZZZZZZZ.jpg", width="70" height="95">'
    ],

    [
        "titulo" => "Estadística para administración y economía",
        "autor" => "Levin, Richard l",
        "fecha" => '2010',
        "libroimagen" => '<img src="https://images-na.ssl-images-amazon.com/images/P/6073207239.01.MZZZZZZZ.jpg", width="70" height="95">'
    ],

    [
        "titulo" => "La organización del futuro",
        "autor" => "Hesselbein, Frances",
        "fecha" => '1998',
        "libroimagen" => '<img src="https://images-na.ssl-images-amazon.com/images/P/9506412553.01.MZZZZZZZ.jpg", width="70" height="95">'
    ],

];

if (isset($_GET['search'])) {
    $termino_busqueda = strtolower($_GET['search']);
    $resultados = array_filter($arraylibros, function ($libro) use ($termino_busqueda) {
        $titulo = strtolower($libro['titulo']);
        $autor = strtolower($libro['autor']);
        return strpos($titulo, $termino_busqueda) !== false || strpos($autor, $termino_busqueda) !== false;
    });

    if (!empty($resultados)) {
        echo '<div class="contenedor">';
        foreach ($resultados as $libro) {
            echo '<div class="libro">';
            echo $libro['libroimagen'];
            echo '<h2>' . $libro['titulo'] . '</h2>';
            echo '<p><strong>Autor:</strong> ' . $libro['autor'] . '</p>';
            echo '<p><strong>Año:</strong> ' . $libro['fecha'] . '</p>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo '<p>No se encontraron resultados para: <strong>' . htmlspecialchars($_GET['search']) . '</strong></p>';
    }
} else {
    echo '<div class="contenedor">';
    foreach ($arraylibros as $libro) {
        echo '<div class="libro">';
        echo $libro['libroimagen'];
        echo '<h2>' . $libro['titulo'] . '</h2>';
        echo '<p><strong>Autor:</strong> ' . $libro['autor'] . '</p>';
        echo '<p><strong>Año:</strong> ' . $libro['fecha'] . '</p>';
        echo '</div>';
    }
    echo '</div>';
}
?>

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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="javascript/nav.js"></script>

</body>

</html>