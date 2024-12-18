<?php 
$titulo = "Master SEO Técnico | Alberto P";
$estado = "optimizada";
define("pagina", "inicio");
include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
include $_SERVER['DOCUMENT_ROOT'].'/assets/tablasql.php';?>
<?php
  define("SEOcalidad", "Máster de SEO Técnico de Asdrubal");
  $variable1 = 'Texto de prueba';
  $variable2 = 'Texto de prueba';
  $variable3 = 'Texto probando';
  if($variable1 == $variable2){echo "La variable1 y variable 2 son iguales";}
  elseif($variable2 != $variable3){echo '</p>La Variable2 y la 3 ya no son iguales';}
  else{echo 'No se cumplen los condicionales';}
?>
    <!--Esto es un comentario -->
    <section id="introducción">
        <H1 class="mainheading">Esto es un h1 con php (<?php echo SEOcalidad ?>) </H1>
        <H1 class="display-none">Esto es un h1</H1>
        <div>Esto no lo es.<p>Esto es un párrafo</p></div>
        <div>
    <section id="seccion-php">
        <h2>Estas son funciones PHP</h2>
        <?php 
        // Imprime algo como: Monday 8th of August 2005 03:12:46 PM
        echo date('l jS \of F Y h:i:s A');?>
        </div>
        <?php
        echo generarNumeroAleatorio(1,100);
        ?>
        <div><?php echo "Esto es texto con php";?></div>
    </section>
        <img src="/imagenes/laptop-reading.png" alt="bitmoji en ordenador" style="width: 500px; height: 500px;">
        <div>
          <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
          <span class="display-none">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</span>
          <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
          <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
          <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>    
        </div>
    </section>
    <section id="tablas">
        <h2>Tablas HTML</h2>
        <table style="width: 100%;" id="tabla-principal">
            <tr>
              <th>Encabezado 1</th>
              <th>Encabezado 2</th>
              <th>Encabezado 3</th>
            </tr>
            <tr>
              <td>Fila 1 columna 1</td>
              <td>Fila 1 columna 2</td>
              <td>Fila 1 columna 3</td>
            </tr>
            <tr>
              <td>Fila 2 columna 1</td>
              <td>Fila 2 columna 2</td>
              <td>Fila 2 columna 3</td>
            </tr>
            <tr>
              <td>Fila 3 columna 1</td>
              <td>Fila 3 columna 2</td>
              <td>Fila 3 columna 3</td>
            </tr>
        </table>
  </section>
  <section id="faqs">
    <h2>Preguntas frecuentes</h2>
    <details>
      <summary>Pregunta frecuente 1</summary>
      <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
    </details>
    <details>
      <summary>Pregunta frecuente 2</summary>
      <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
    </details>
    <details>
      <summary>Pregunta frecuente 3</summary>
      <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
    </details>
  </section>
  <section id="cita">
    <h2>Cita</h2>
      Aquí iría un texto anterior a la cita a modo explicativo.
      <blockquote>Esto es una cita para probar cómo funciona, Aristóteles.</blockquote>
  </section>
  <section id="code">
    <h2>Código</h2>
    Ahora vamos a probar a implementar código con la etiqueta code
    <code>
      Redirect 301 example.com/store https://www.amazon.com/s?marketplaceID=...
    </code>
  </section>
  <section id="multimedia">
    <h2>Sección de multimedia</h2>
      <h3>Vídeos</h3>
      <video loading="lazy" width="400" height="400" autoplay loop muted poster="imagenes/hand-pointer.png">
        <source src="video/COLECCION_CRETA_25.ogv" type="video/ogvv">
        <source src="video/COLECCION_CRETA_25.mp4" type="video/mp4">
        Your browser does not support HTML video.
      </video>
      <h3>Imagenes</h3>
      <picture>
        <source type="image/avif" srcset="/imagenes/html-cheatsheet.avif">
        <img src="/imagenes/html-cheatsheet.png" loading="lazy" alt="cheatsheet de html" style="width: 100%; height: 600;">
      </picture>
      <h3>Iframe</h3>
      <iframe loading="lazy" width="560" height="315"
        src="https://www.youtube.com/embed/gIO_7bjpx1M?si=USZEDIVTvjxWO-S-"
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
      </iframe>
      <iframe loading="lazy" width="560" height="315"src="https://fitgeneration.es/calculadora/harris-benedict/" frameborder="0"></iframe>
  </section>
<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';?>