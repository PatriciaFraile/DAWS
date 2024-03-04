<?php
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "for1";
// conexion a la base de datos 
$conexion = mysqli_connect($servidor, $usuario, "") or die("Error con la base de datos");
$db = mysqli_select_db($conexion, $basededatos) or die("Error de conexion");
//El metodo POST es para recuperar 
$nombre = $_POST['nombre']; //nombre--> name="nombre en el html
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$localidad = $_POST['localidad'];
$contrasena = $_POST['contrasena'];

$sql = "INSERT INTO datos VALUES ('$nombre','$apellido','$email','$direccion','$localidad','$contrasena')";

$ejecutar = mysqli_query($conexion, $sql);
if (!$ejecutar) {
    echo "hubo algún error";
} else {
    echo "guardado";
}




?>