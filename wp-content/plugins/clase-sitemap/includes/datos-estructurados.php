<?php

// Cosas SEO del Footer
function wp_seofooter() {
    //Esto se llama desde header.php
$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
//$protocol = 'https://';
$url_sin_string = $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
$term = get_queried_object();
$proyectoname = "EMPRESANOMBRE";

echo get_field( 'custom_meta_footer', $term );


?>
  <?php
if ( is_home() || ( is_front_page() && is_page() ) ) {
    // hacer algo si es la página principal
    // No funciona por algún motivo extraño

?>

 <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "EMPRESANOMBRE",
  "url": "<?php echo $url_sin_string;?>",
  "logo": "<?php echo get_template_directory_uri(); ?>/images/logo.png"

}
</script>
<?php
}
elseif ( is_singular('post') && in_category('festivales') ) {
    // Aquí haces algo solo si es un post individual de la categoría "Festivales"
?>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
      "@type": "Event",
      "name": "<?php the_title(); ?>",
      "startDate": "<?php $f=get_field('fecha');$d=DateTime::createFromFormat('d/m/Y',$f);echo esc_js($d?$d->format('Y-m-d'):''); ?>",
      "endDate": "<?php $f=get_field('fecha');$d=get_field('dias');$o=DateTime::createFromFormat('d/m/Y',$f);if($o)$o->modify('+'.($d-1).' days');echo esc_js($o?$o->format('Y-m-d'):''); ?>",
      "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
      "eventStatus": "https://schema.org/EventScheduled",
      "location": {
        "@type": "Place",
        "name": "<?php the_field('lugar_evento', $term ); ?>",
        "address": {
          "@type": "PostalAddress",
          "name": "<?php the_field('direccion_evento', $term ); ?>"
        }
      },
      "image": "<?php the_field('imagen_festival', $term ); ?>",
      "description": "<?php the_field('descripcion_corta', $term ); ?>"
    }
    </script>
<?php
;}

 else {
    // hacer otra cosa si no es una publicación, categoría o la página principal

  }

}
//do something just on a category archive page }
add_action('wp_footer', 'wp_seofooter'); //hook que lanza la funcion y carga el contenido en el head

?>