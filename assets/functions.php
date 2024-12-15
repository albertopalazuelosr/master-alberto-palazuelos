<?php
function bannerfooter(){
    $imageUrl = "/imagenes/banner-navidad.jpg"; // Ruta de la imagen
    $altText = "Banner de Navidad"; // Texto alternativo
    $width = "100%"; // Ancho de la imagen
    $height = "auto"; // Altura de la imagen
    $title = "Feliz Navidad 🎄";

    return "<img src='$imageUrl' title='$title' alt='$altText' style='width: $width; height: $height;'>";
}
function generarNumeroAleatorio($min, $max) {
    return "Número aleatorio: " . rand($min, $max);
}
?>