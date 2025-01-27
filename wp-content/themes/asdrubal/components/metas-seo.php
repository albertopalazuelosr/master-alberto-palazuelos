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
   

    <?php
    // Comprueba si la categoría es 'coches'
    if ( in_category('festivales') ) {
    $metadesc_festivales = 'Vive ' . get_field( 'dias' ) . ' días épicos en el Festival de ' . get_field( 'tipo_de_musica' ) . ' en ' . get_field( 'ciudad') . ' (' . get_field( 'pais' ) . ') a partir del ' . get_field( 'fecha') . '. Entradas desde ' . get_field( 'precio' ) . '€. ¡Reserva ya!';
    ?>
    <meta name="description" content="<?php echo $metadesc_festivales ;?>">
    <meta property="og:description" content="<?php echo $metadesc_festivales ;?>">
    <meta property="twitter:description" content="<?php echo $metadesc_festivales ;?>">

    <?php
    }
    else{
    ?>
    <meta name="description" content="<?php the_field( 'metadescription', $term ); ?>">
    <meta property="og:description" content="<?php if ( get_field( 'og_description', $term ) ){the_field( 'og_description', $term );} else{the_field( 'metadescription', $term );}?>">
    <meta property="twitter:description" content="<?php if ( get_field('twitter_description', $term)){the_field( 'twitter_description', $term );} elseif(get_field( 'og_description', $term)){the_field( 'og_description', $term );} else{the_field( 'metadescription', $term );}?>">
    <?php ;} ?>


    

        
    <!-- Title y Meta descripción -->
    <title><?php the_field( 'title', $term); ?> | Master SEO</title>
    <meta name="description" content="<?php the_field( 'metadescription', $term); ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php
    if (get_field('og_title')){
        the_field( 'og_title', $term);
    } else{the_field('title',$term);}
    ?>">
    <meta property="og:description" content="<?php if (get_field('og_description')){the_field( 'og_description', $term);} else{the_field('metadescription',$term);}?>">
    <meta property="og:image" content="<?php if (get_field('og_image')){the_field( 'og_image', $term);} else{ echo 'http://master-seo.test/wp-content/uploads/2025/01/imagen-branding-basico.jpg';}?>">
    <meta property="og:image:secure_url" content="<?php if (get_field('og_image')){the_field( 'og_image', $term);} else{ echo 'http://master-seo.test/wp-content/uploads/2025/01/imagen-branding-basico.jpg';}?>">
    <meta property="og:url" content="<?php if (get_field ('canonical', $term)){the_field('canonical',$term);} else {echo $url_sin_string;}?>">
    <meta property="og:type" content="website">
    <meta property="og:image:alt" content="<?php the_field( 'title', $term ); ?>">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php
    if (get_field('twitter_title')){
        the_field('twitter_title', $term);
    } elseif(get_field('og_title', $term)){the_field('og_title', $term);
    } else{the_field('title',$term);}
    ?>">
    <meta name="twitter:description" content="<?php
    if (get_field('twitter_description')){
        the_field('twitter_description', $term);
    } elseif(get_field('og_description', $term)){the_field('og_description', $term);
    } else{the_field('metadescription',$term);}
    ?>">
    <meta name="twitter:image" content="<?php if (get_field('og_image')){the_field( 'og_image', $term);} else{ echo 'http://master-seo.test/wp-content/uploads/2025/01/imagen-branding-basico.jpg';}?>">
    <meta name="twitter:url" content="<?php if (get_field ('canonical', $term)){the_field('canonical',$term);} else {echo $url_sin_string;}?>">