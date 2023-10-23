<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <div class="mb-3">
        <label id=name>User Name</label>
        <input type="text" class="form-control" id="user" placeholder="UserName">
    </div>
    <div class="mb-3">
        <label id=contra>Password</label>
        <input type="password" class="form-control" id="contras" placeholder="PassWord">
    </div>
    <div class="mb-3">
        <button>Register</button>
    </div>
    <?php
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basededatos = "for1";
    $conexion = mysqli_connect($servidor, $usuario, "") or die("Error con la base de datos");
    $db = mysqli_select_db($conexion, $basededatos) or die("Error de conexion");

    ?>
</body>

</html>