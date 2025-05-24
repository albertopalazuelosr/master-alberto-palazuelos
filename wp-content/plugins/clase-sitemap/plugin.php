<?php
/*
Plugin Name: Lección Sitemap
Plugin URI:
Description: Description
Author: Master SEO
Autor URI:
Version:
License:
*/

//Borrar Sitemap Nativo Wordpress
include 'includes/del-sitemap.php';

//Generar plantilla
include 'includes/template-generator.php';

include 'includes/datos-estructurados.php';

function custom_publish_post_actions() {
// Visitar la URL del generador de sitemap
$sitemap_url = 'http://master-seo.test/generador-de-sitemap/';
wp_remote_get($sitemap_url);
}

add_action('publish_post', 'custom_publish_post_actions');

?>



<div>
    Jorobate Flanders
</div>