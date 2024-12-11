<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="/css/estilo.css">
    <title>Contacto | Master SEO Test</title>
    <style>
        .imagencss1 {
            height: 500px;
            width: 500px;
            background-image: url(/imagenes/hand-pointer.png);
            margin: auto;
            background-size: 200px;
            background-repeat: no-repeat;
            background-position-x: center;
            transform: scaleX(-1);
    }
    .imagencss2 {
    background-image: url(/imagenes/chincheta.png);
    background-size: 1em;
    background-repeat: no-repeat;
    padding-left: 1.3em;
    background-position-y: center;
    }
    .selectores.avanzados {
    background: grey;
    }
    p:first-child {
        background: blue;
        color: aliceblue;
    }
    .selectores.avanzados p::first-letter {
        font-size: 30px;
        color: green;
    }
    .selectores.avanzados div:nth-child(2) {
        background: green;
    }
    a[href^="https:"] {
        background: yellow;
    }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/sobre-mi.html">Sobre mí</a></li>
                <li><a href="/contacto.html">Contacto</a></li>
                <li><a href="/carpeta/archivo-carpeta.html">Archivo dentro de carpeta</a></li>
                <li><a href="https://www.w3schools.com/" target="_blank">Más información</a></li>
                <li><a href="/minificado.html">HTML de INDEX minificado</a></li>
                <li><a href="/css.html">Explicación CSS</a></li>
            </ul>
        </nav>
    </header>
    <!--Esto es un comentario -->
    <section id="mainsection">
        <H1 class="mainheading">Esto es el h1 de contacto</H1>
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
        <div><a href="/sobre-mi.html">Esto no lo es</a></div>
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