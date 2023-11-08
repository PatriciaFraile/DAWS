<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href=".\utils\css\main.css" />

    <title>Document</title>
</head>

<body>
    <form action="conexion.php" method="post">
        <label for="nombre">User Name</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required />

        <label id="contra">Password</label>
        <input type="password" class="form-control" id="contras" placeholder="PassWord" />

        <input type="submit" value="registrar" />
    </form>
</body>

</html>