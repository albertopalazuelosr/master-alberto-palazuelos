<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type='text/css' media='all'>
<?php
wp_head();
wp_footer();// Llama al header.php o al footer.php
get_header();
wp_footer();// Saca el título que se ha asignado en el back
;?>
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
            <li><a href="/csss">Explicación CSS</a></li>
            <li><a href="/redireccion">Redirección</a></li>
            <li><a href="/redireccion-js">Redirección JS</a></li>
        </ul>
     </nav>
    </header>
