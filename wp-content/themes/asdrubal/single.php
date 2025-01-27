<?php
include_once 'header.php';?>
<div class="generico">
    <h1><?php the_title();?></h1>
    <section id="introduccion">
        <?php the_field( 'descripcion_corta' ); ?>
    </section>
    <section id="contenido">
        <?php 
         if ( in_Category('festivales')){
            echo 'Estás en la categoría Festivales';
         } else {;}
        echo the_content();?>
    </section>
</div>
<?php
include_once 'footer.php';?>