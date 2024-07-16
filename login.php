<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicie sesión</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="contenedor">
        <h1 class="saludo">¡Bienvenido!</h1><br>
        <h3>Ingresa tus datos para iniciar sesión.</h3><br>
        <hr><br>
        <div class="datos">
            <form id="login" action="php/datosLogin.php" method="POST">
                <label>Usuario</label><br>
                <input type="text" name="usuario" id="usuario" placeholder="Ingresa tu código UTP" required><br><br>
                <label>Contraseña</label><br>
                <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" required><br><br>
                <input type="checkbox">
                <label>Recordar mis datos</label><br><br>
                <a href="registro.php">No tengo cuenta</a><br><br>
                <input name="btningresar" type="submit" class="redirigir" value="Iniciar sesión">
            </form>
        </div>
    </div>
    <div class="img">
        <img src="img/web-login-pao.svg">
    </div>
    <script src="javascript/login.js"></script>
</body>
</html>
