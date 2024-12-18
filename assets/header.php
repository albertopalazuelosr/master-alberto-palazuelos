<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/estilo.css">
    <title>
        <?php
        $tituloprov = "Título provisional";
        if (empty($titulo)) {
            if (empty($tituloprov)) {
                echo "Página sin título";
            } else {
                echo "Proyecto del master";
            }
        } else {
            echo $titulo;
        }
        ?>
    </title>
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/assets/functions.php';
    switch (constant("pagina")) {
        case 'inicio':
            break;
        case 'css':
            echo '<link rel="stylesheet" href="/css/pagina-css.css">';
            break;
        case 'contacto':
            echo '<link rel="stylesheet" href="/css/contacto.css">';
            break; //El error fue no poner este break puesto que no rompía la cadena//
        case 'sobre mi':
        case 'nueva carpeta':
            echo '<link rel="stylesheet" href="/css/otro.css">';
            break;
        default:
            echo '<!-- No pondré css en este caso del Switch Case-->';
        break;
    }
    ?>
    </title>
</head>
<body>
    <header>
      <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/sobre-mi">Sobre mí</a></li>
            <li><a href="/contacto">Contacto</a></li>
            <li><a href="/carpeta/archivo-carpeta">Archivo dentro de carpeta</a></li>
            <li><a href="https://www.w3schools.com/" target="_blank">Más información</a></li>
            <li><a href="/css">Explicación CSS</a></li>
            <li><a href="/redireccion">Redirección</a></li>
        </ul>
     </nav>
     <?php

    $estado = $estado ?? 'sin optimizar'; // Si la variable no está definida, se asigna "sin optimizar".
    switch ($estado) {
    case 'optimizada':
        echo "Estado: optimizada";
        break;
    case 'en curso':
        echo "Estado: en curso";
        break;
    case 'sin optimizar':
    default: // Cubre el caso de que no esté definida o no coincida.
        echo "Estado: sin optimizar";
        break;
    }
    ?>

    </header>
