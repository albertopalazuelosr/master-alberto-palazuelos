<?php
include_once 'header.php';?>
<div class="generico">
    <h1><?php the_title();?></h1>
    <section id="contenido">
        <?php echo the_content();?>
    </section>
    <?php
    include 'plantillas/trespost.php';
    ?>
</div>
<?php
include_once 'footer.php';?>