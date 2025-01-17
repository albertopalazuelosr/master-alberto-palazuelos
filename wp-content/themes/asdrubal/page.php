<?php
// Códigos de utilidad// Saca la ruta hasta el tema
echo get_template_directory_uri();// Saca el lang del idioma configurado en WordPress
language_attributes();// Actívame el head y el footer de WordPress para que puedan ir sus funcionalidades básicas
wp_head();
wp_footer();// Llama al header.php o al footer.php
get_header();
wp_footer();// Saca el título que se ha asignado en el back
the_title();// Saca el contenido que se ha asignado en el back
echo the_content();?>