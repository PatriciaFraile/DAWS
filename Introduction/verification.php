<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href=".\utils\css\main.css" />
    <title>Problema</title>
</head>

<body>
    <?php
    if ($_SESSION['numeroaleatorio'] == $_REQUEST['numero']) {
        echo "Ingresó el valor correcto";
    } else {
        echo "Incorrecto";
    }
    ?>
</body>
<button id="register"><a href="register.php">Siguente</a></button>

</html>