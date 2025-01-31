<?php $term = get_queried_object();
$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
$url_sin_string = $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8" />

    <!-- Metarobots -->

    <?php $metarobots_checked_values = get_field( 'metarobots', $term );
    if ( $metarobots_checked_values ) : ?>
            <meta name="robots" content="<?php the_field( 'metarobots', $term); ?>">
    <?php endif; ?>


    <?php the_field('custom_meta', $term); ?>
    <link rel="canonical" href="<?php if (get_field ('canonical', $term)){the_field('canonical',$term);} else {echo $url_sin_string;}?>">
   
    <!-- Title y Meta descripción -->
    <?php
    $title = get_field('title', $term);

    // Si no hay un título personalizado, usa el título de la página
    if (!$title) {
        $title = get_the_title();
    }
    ?><title><?php echo esc_html($title); ?> | Master SEO</title>
 

    <?php
        $metadesc = get_field('metadescription', $term);
        $es_festival = in_category('festivales');

        if (!$metadesc && $es_festival) {
            $metadesc = 'Vive ' . get_field('dias') . ' días épicos en el Festival de ' . get_field('tipo_de_musica') . 
                        ' en ' . get_field('ciudad') . ' (' . get_field('pais') . ') a partir del ' . get_field('fecha') . 
                        '. Entradas desde ' . get_field('precio') . '€. ¡Reserva ya!';
        }

        // Solo imprimir las etiquetas si $metadesc tiene contenido
        if (!empty($metadesc)) {
            ?>
            <meta name="description" content="<?php echo esc_attr($metadesc); ?>">
            <meta property="og:description" content="<?php echo esc_attr($metadesc); ?>">
            <meta property="twitter:description" content="<?php echo esc_attr($metadesc); ?>">
            <?php
        }
    ?>        

    <!-- Open Graph -->
    <?php $og_title = get_field('og_title', $term) ?: $title;?><meta property="og:title" content="<?php echo esc_attr($og_title); ?> | Master SEO">
    <meta property="og:image" content="<?php if (get_field('og_image')){the_field( 'og_image', $term);} else{ echo 'http://master-seo.test/wp-content/uploads/2025/01/imagen-branding-basico.jpg';}?>">
    <meta property="og:image:secure_url" content="<?php if (get_field('og_image')){the_field( 'og_image', $term);} else{ echo 'http://master-seo.test/wp-content/uploads/2025/01/imagen-branding-basico.jpg';}?>">
    <meta property="og:url" content="<?php if (get_field ('canonical', $term)){the_field('canonical',$term);} else {echo $url_sin_string;}?>">
    <meta property="og:type" content="website">
    <meta property="og:image:alt" content="<?php the_field( 'title', $term ); ?>">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <?php $twitter_title = get_field('twitter_title', $term) ?: $og_title;?><meta name="twitter:title" content="<?php echo esc_attr($twitter_title); ?> | Master SEO">
    <meta name="twitter:image" content="<?php if (get_field('og_image')){the_field( 'og_image', $term);} else{ echo 'http://master-seo.test/wp-content/uploads/2025/01/imagen-branding-basico.jpg';}?>">
    <meta name="twitter:url" content="<?php if (get_field ('canonical', $term)){the_field('canonical',$term);} else {echo $url_sin_string;}?>">