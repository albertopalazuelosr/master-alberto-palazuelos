<?php
$current_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$es_url = 'https://master-seo.test/prueba-idiomas.php';
$en_url = 'https://master-seo.test/en/test.php';
if ($lang == 'es'){
    $title = 'Ejemplos de hreflang';
}
else{
    $title = 'hreflang examples';
}
?>

<html lang="<?php echo $lang; ?>">
    <head>
        <title><?php echo $title;?></title>
        <link rel="canonical" href="<?php echo $current_url;?>">
        <link rel="alternate" hreflang="en" href="<?php echo $en_url;?>" />
        <link rel="alternate" hreflang="es" href="<?php echo $es_url;?>" />
        <link rel="alternate" hreflang="x-default" href="<?php echo $es_url;?>" />
    </head>
    <body>
        <header>
            <nav>
            </nav>
        </header>
        <section><?php
            if ($lang == 'es'){
                echo 'HOLA HOLA HOLA';
            }
            else{
                echo 'HELLO HELLO HELLO';
            }
            ?>
        </section>
        <footer></footer>
    </body>
</html>