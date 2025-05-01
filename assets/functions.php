<?php
function bannerfooter(){
    $imageUrl = "/imagenes/banner-primavera.jpg"; // Ruta de la imagen
    $altText = "Banner de Primavera"; // Texto alternativo
    $width = "100%"; // Ancho de la imagen
    $height = "auto"; // Altura de la imagen
    $title = "¡Feliz Primavera!";

    return "<img src='$imageUrl' title='$title' alt='$altText' style='width: $width; height: $height;'>";
}
function generarNumeroAleatorio($min, $max) {
    return "Número aleatorio: " . rand($min, $max);
}
?>