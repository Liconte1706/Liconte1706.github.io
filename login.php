<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="./Estilos/estilos.css">
    <link rel="stylesheet" href="./Estilos/login.css">
    <link rel="stylesheet" href="./Estilos/transition.css">
    <?php include_once("./inc/nav.php") ?>
<div class="login">
    <form>
        <h1>INICIAR SESION</h1>
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" placeholder="Ingresa tu usuario" name="usuario">
        <label for="contraseña">Contraseña</label>
        <input type="password" id="contraseña" placeholder="Ingresa tu contraseña" name="contraseña">
        <button>Entrar</button>
    </form>
</div>

</body>
</html>