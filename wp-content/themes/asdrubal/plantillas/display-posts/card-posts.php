<div class="post-card">
    <a href="<?php the_permalink();?>" title="<?php the_permalink();?>" id="<?php The_ID();?>">
        <div class="post-name"><?php the_title();?></div>
    <div class="post-desc">
    <?php 
    $excerpt = get_the_excerpt(); 
    $posicionPrimerPunto = strpos($excerpt, '.');
    // Si hay un punto, corta el excerpt; si no, muestra el contenido completo
    if ($posicionPrimerPunto !== false) {
        $excerptCorto = substr($excerpt, 0, $posicionPrimerPunto + 1); // Incluye el punto
    } else {
        $excerptCorto = $excerpt; // Si no hay punto, muestra todo
    }
    // Muestra el excerpt modificado
    echo $excerptCorto; 
    ?>
    </div>
    </a>
</div>