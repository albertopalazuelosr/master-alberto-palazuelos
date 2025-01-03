<?php 
$titulo = "Master SEO Técnico | Alberto P";
$estado = "optimizada";
define("pagina", "inicio");
include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
?>
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
        <H1 id="javascript" class="mainheading">Esto es un h1 con php (<?php echo SEOcalidad ?>) </H1>
        <h2 class="tagjs">fdsfasd</h2>
        <noscript>Código en noscript con php</noscript>
        <div class="classjs"></div>
        <div class="classjs"></div>
        <div class="classjs"></div>
        <div class="classjs"></div>
        <div id="idjs"></div>
        <div id="queryselector"></div>
        <div class="queryselector"></div>
        <div><a href="https://carlos.sanchezdonate.com/">Este texto debería cambiar</a></div>
        <script>
        document.getElementById("idjs").innerHTML = "Texto creado con js a partir Id";
        document.getElementsByClassName("classjs")[0].innerHTML = "Texto creado con js a partir class";
        document.getElementsByTagName("h2")[0].innerHTML = "Esto es un h2 modificado por js";
        const collection = document.getElementsByClassName("classjs");
        for (let i = 0; i < collection.length; i++) {
        collection[i].innerHTML = "Esto son muchos textos con classjs modificado por js";
        }
        document.querySelector("#queryselector").innerHTML = "Texto creado con js a con queryselector a partir de Id";
        document.querySelector(".queryselector").innerHTML = "Texto creado con js a con queryselector a partir de Class";
        
        /*const boton2 = document.querySelector('.boton2');
        boton2.addEventListener('click', enlacesexternos);*/


        function enlacesexternos() {
        const collectiona = document.querySelectorAll('a[href^="https:"]');
        for (let yu = 0; yu < collectiona.length; yu++) {
            const enlace = collectiona[yu];
            // Comprueba si ya tiene el texto modificado
            if (enlace.dataset.originalText) {
                // Si el texto original está guardado, restaura el texto original
                enlace.innerHTML = enlace.dataset.originalText;
                enlace.removeAttribute('data-original-text'); // Limpia el atributo
            } else {
                // Guarda el texto original en un atributo personalizado
                enlace.dataset.originalText = enlace.innerHTML;
                // Cambia el texto al nuevo valor
                enlace.innerHTML = "ENLACE EXTERNO";
            }
          }
        }

        /*activador[0].setAttribute("onclick", "funcionNumero2()");

        function funcionNumero2(){
        const ejemplazo = document.getElementsByClassName("boton2");
        for (let i = 0; i < ejemplazo.length; i++) {
        ejemplazo[i].innerHTML.remove("ENLACE EXTERNO");
        }
        activador[0].setAttribute("onclick", "funcioncarlos()");
        }*/

        let ejemplo= '¡Variable con let!';
        var testeo = '¡Variable con var!';
        const constante = '¡Constante!';

        </script>
        
        <H1 class="display-none">Esto es un h1 escondido</H1>
        <p id="firstjs">Mi primer javascript con onclick</p>
        <button type="button"
        onclick='document.getElementById("firstjs").innerHTML = "Cambio de texto con js" + ejemplo + testeo + constante'>
        ¡PÚLSAME!</button>
        <div>Esto no lo es.<p>Esto es un párrafo</p></div>
        <div id="cambiante"></div>
        <div class="boton" onclick="enlacesexternos()">
          Púlsame para detectar los enlaces externos (con onclick)
        </div>
        <div class="boton2">
          Púlsame para detectar los enlaces externos (con addEventListener)
        </div>
        <script>
        // Selecciona el div con la clase "boton2"
        const boton2 = document.querySelector('.boton2');

        // Añade el EventListener al botón
        boton2.addEventListener('click', enlacesexternos);
        </script>
        <script>
        let tiempo = new Date().getDay();
        let educacion;

        if (tiempo >= 1 && tiempo <= 4) { // Lunes a jueves (inclusive)
            educacion = "disfruta de la semana";
        } else { // Cualquier otro día (viernes, sábado o domingo)
            educacion = "disfruta del finde";
        }

        let mes;
        switch (new Date().getMonth()) {
            case 0:
                mes = "Enero";
                break;
            case 1:
                mes = "Febrero";
                break;
            case 2:
                mes = "Marzo";
                break;
            case 3:
                mes = "Abril";
                break;
            case 4:
                mes = "Mayo";
                break;
            case 5:
                mes = "Junio";
                break;
            case 6:
                mes = "Julio";
                break;
            case 7:
                mes = "Agosto";
                break;
            case 8:
                mes = "Septiembre";
                break;
            case 9:
                mes = "Octubre";
                break;
            case 10:
                mes = "Noviembre";
                break;
            case 11:
                mes = "Diciembre";
                break;
            default:
                mes = "Mes desconocido"; // En caso de error
}
        document.getElementById("cambiante").innerHTML = "Hola, " + educacion + " ánimo con el mes de " + mes;
        </script>
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
        <?php
        include $_SERVER['DOCUMENT_ROOT'].'/assets/tablasql.php';
        ?>
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
<script src="/scripts/prueba.js"></script>




