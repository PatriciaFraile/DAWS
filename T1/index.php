<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href=".\utils\css\main.css" />
    <title>Problema</title>
</head>

<body>
    <form action="verification.php" method="post">
        Dígitos verificadores:<img src="./utils/php/capchat.php">
        <br>
        Ingrese valor:
        <input type="text" name="numero" required>
        <br>
        <input type="submit" value="Verificar">
    </form>
</body>

</html>