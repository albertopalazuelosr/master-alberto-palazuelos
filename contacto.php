<?php 
$titulo = "Contacto | Alberto P";
$estado = "en curso";
define('pagina', "contacto");
include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';?>
    <!--Esto es un comentario -->
    <section id="mainsection">
        <H1 class="mainheading">Cambio en el branch de SEO</H1>
        <img src="/imagenes/sticker.png" alt="bitmoji money" style="width: 100%; max-width: 500px;">
        <div class="imagencss1">

        </div>
    </section>
    <section class="paja">
        <div>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
        </div>
        <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
        </p>
    </section>
    <section class="enlaces-externos">
        <div><a href="https://es.lipsum.com/">Esto es un enlace externo</a></div>
        <div><a href="/sobre-mi.php">Esto no lo es</a></div>
    </section>
    <section class="selectores avanzados">
        <p>Párrafo 1</p>
        <div>Div hijo</div>
        <p>Párrafo 2</p>
        <p>Párrafo 3</p>
        <div><p>Div hijo 2</p></div>
        <p>Párrafo 4</p>
    </section>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';?>
    <script>
        const collectiona = document.querySelector('a[href^="https:"]');
        for (let yu = 0; yu < collectiona.length; yu++) {
        collectiona[yu].innerHTML = "Enlace externo";
        }
        </script>