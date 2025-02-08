<?php
include_once 'header.php';?>
<style>
img.fotoprincipal {
    aspect-ratio: 1 / 1;
    object-fit: cover;
}
.cabecera {
    display: flex
;
    flex-direction: row-reverse;
    align-items: flex-start;
    background-image: url(https://master-seo.test/wp-content/uploads/2025/02/image-1.jpg);
    background-size: cover;
    background-attachment: fixed;
}
div#introduccion {
    padding-right: 75px;
    padding-left: 2px;
}
</style>
<div class="generico">
    <h1><?php the_title();?></h1>
    <div class="cabecera">
        <div>
            <?php if ( get_field( 'imagen_festival' ) ) : ?>
            <img src="<?php the_field( 'imagen_festival' ); ?>" class="fotoprincipal" style="height: 500px" />
            <?php endif ?></div>
        <div id="introduccion">
            <?php the_field( 'descripcion_corta' ); ?>
            <section id="contenido">
        <?php 
         if ( in_Category('festivales')){
            echo 'Estás en la categoría Festivales';
         } else {;}
        echo the_content();?>
    </section>
        </div>
    </div>

</div>
<?php
include_once 'footer.php';?>