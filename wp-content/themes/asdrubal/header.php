<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type='text/css' media='all'>
<?php
include 'components/metas-seo.php';
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
            <li><a href="/sobre-nosotros">Sobre nosotros</a></li>
            <li><a href="/blog/category/rastreo-renderizado-indexacion/">Rastreo, renderizado e indexación</a></li>
            <li><a href="/blog/category/seo-estrategico/">SEO estratégico</a></li>
            <li><a href="/blog/category/seo-tecnico/">SEO Técnico</a></li>
        </ul>
     </nav>
    </header>
