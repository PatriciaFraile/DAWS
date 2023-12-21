<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href=".\utils\css\main.css" />

    <title>Document</title>
</head>

<body>
    <div class="formato">
        <form action="./utils/php/conexion.php" method="post">
            <label for="nombre">User Name</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="user name" required />
            <br>
            <br>
            <label for="apellido">Second Name</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="second name" required />
            <br>
            <br>
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email" required />
            <br>
            <br>
            <label for="direccion">Direction</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="direction" required />
            <br>
            <br>
            <label for="localidad">Location</label>
            <input type="text" class="form-control" id="localidad" name="localidad" placeholder="location" required />
            <br>
            <br>

            <label id="contrasena">Password</label>
            <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="passWord"
                required />
            <br>
            <br>


            <input type="submit" value="register" />
        </form>
    </div>



</body>

</html>