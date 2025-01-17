<?php
include_once __DIR__. ('/../header.php');
?>
<div class="generico">
    <div>Plantilla 1</div>
    <h1><?php the_title();?></h1>
    <section id="contenido">
        <?php echo the_content();?>
    </section>
</div>
<?php
include_once __DIR__. ('/../footer.php');?>