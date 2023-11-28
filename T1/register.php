<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href=".\utils\css\main.css" />

    <title>Document</title>
</head>

<body>
    <form action="./utils/php/conexion.php" method="post">
        <label for="nombre">User Name</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required />
        <label for="apellido">Second Name</label>
        <input type="text" class="form-control" id="apellido" name="apellido" required />
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required />
        <label for="direccion">Direction</label>
        <input type="text" class="form-control" id="direccion" name="direccion" required />
        <label for="localidad">Location</label>
        <input type="text" class="form-control" id="localidad" name="localidad" required />
        <label id="contrasena">Password</label>
        <input type="password" class="form-control" id="contrasena" name="contrasena " placeholder="PassWord" />

        <input type="submit" value="registrar" />
    </form>
</body>

</html>