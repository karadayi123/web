<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicie sesión</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="contenedor">
        <h1 class="saludo">¡Bienvenido!</h1><br>
        <h3>Ingrese sus datos para registrarse.</h3><br>
        <hr><br>
        <div class="datos">
            <form id="datosRegistro" action="php/datosregistro.php" method="POST">
                <label class="subtitulo">Nombre</label><br>
                <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" required><br><br>
                <label>Usuario</label><br>
                <input type="text" name="usuario" id="usuario" placeholder="Ingrese su código UTP" required><br><br>
                <label class="subtitulo">Correo institucional</label><br>
                <input type="email" name="correo" id="correo" placeholder="Ingrese su correo" required><br><br>
                <label>Contraseña</label><br>
                <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" required><br><br>
                <a href="login.php">Ya tengo cuenta</a><br><br>
                <input name="btningresar" type="submit" class="redirigir" value="Registrarse">
            </form>
        </div>
    </div>
    <div class="img">
        <img src="img/web-login-pao.svg">
    </div>
    <script src="javascript/registro.js"></script>
</body>
</html>
