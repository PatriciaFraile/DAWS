<?php

$ancho = 100;
$alto = 40;
$imagen = imageCreate($ancho, $alto);



$amarillo = ImageColorAllocate($imagen, 255, 255, 0);


ImageFill($imagen, 0, 0, $amarillo);


$rojo = ImageColorAllocate($imagen, 255, 0, 0);
$total = 6;
$aleatorio = "";
$possible = "1234567890qwertyuiopasdfghjklñzxcvbnm";
$valoraleatorio = rand(100000, 999999);
$character = 0;
while ($character < $total) {
    $aleatorio .= substr($possible, mt_rand(0, strlen($possible) - 1), 1);
    $character++;

}

session_start();
$_SESSION['numeroaleatorio'] = $aleatorio;


ImageString($imagen, 5, 25, 5, $aleatorio, $rojo);



for ($c = 0; $c <= 5; $c++) {
    $x1 = rand(0, $ancho);
    $y1 = rand(0, $alto);
    $x2 = rand(0, $ancho);
    $y2 = rand(0, $alto);
    ImageLine($imagen, $x1, $y1, $x2, $y2, $rojo);
}


Header("Content-type: image/jpeg");

ImageJPEG($imagen);

ImageDestroy($imagen);
?>