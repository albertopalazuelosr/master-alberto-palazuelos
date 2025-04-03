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
    <section id="ahref">
      <h2>Sección de enlaces relativos y absolutos</h2>
      <div><a href="ejemplo" rel="noopener">Url absoluta desde ahref="https://master-seo.test/ejemplo"</a></div>
      <div><a href="ejemplo">Enlace desde ahref="ejemplo"</a></div>
      <div><a href="/ejemplo/juan">Enlace desde ahref="/ejemplo/juan"</a></div>
      <div><a href="/ejemplo">Enlace desde ahref="/ejemplo"</a></div>
      <div><a href="ejemplo/juan">Enlace desde ahref="ejemplo/juan"</a></div>
      <div><a href="ejemplo/ejemplo2/ejemplo3">Enlace desde ahref="ejemplo/ejemplo2/ejemplo3"</a></div>
      <div>Esto es un <span id="ofc">enlace ofuscado</span></div>
    </section>
    <section id="cloacking">
      <h2>Cloacking</h2>
        <?php
        // CLOACKING DEFINITIVO
          $deny = array( "2001:4860:4801:10::/64", "127.0.0.1" , "2001:4860:4801:11::/64", "2001:4860:4801:12::/64", "2001:4860:4801:13::/64", "2001:4860:4801:14::/64", "2001:4860:4801:15::/64", "2001:4860:4801:16::/64", "2001:4860:4801:17::/64", "2001:4860:4801:18::/64", "2001:4860:4801:19::/64", "2001:4860:4801:1a::/64", "2001:4860:4801:1b::/64", "2001:4860:4801:20::/64", "2001:4860:4801:21::/64", "2001:4860:4801:22::/64", "2001:4860:4801:23::/64", "2001:4860:4801:24::/64", "2001:4860:4801:25::/64", "2001:4860:4801:26::/64", "2001:4860:4801:27::/64", "2001:4860:4801:28::/64", "2001:4860:4801:29::/64", "2001:4860:4801:2::/64", "2001:4860:4801:2a::/64", "2001:4860:4801:2b::/64", "2001:4860:4801:2c::/64", "2001:4860:4801:2d::/64", "2001:4860:4801:2e::/64", "2001:4860:4801:2f::/64", "2001:4860:4801:30::/64", "2001:4860:4801:31::/64", "2001:4860:4801:32::/64", "2001:4860:4801:33::/64", "2001:4860:4801:34::/64", "2001:4860:4801:35::/64", "2001:4860:4801:36::/64", "2001:4860:4801:37::/64", "2001:4860:4801:38::/64", "2001:4860:4801:39::/64", "2001:4860:4801:3::/64", "2001:4860:4801:3a::/64", "2001:4860:4801:3b::/64", "2001:4860:4801:3c::/64", "2001:4860:4801:3d::/64", "2001:4860:4801:3e::/64", "2001:4860:4801:40::/64", "2001:4860:4801:41::/64", "2001:4860:4801:42::/64", "2001:4860:4801:43::/64", "2001:4860:4801:44::/64", "2001:4860:4801:45::/64", "2001:4860:4801:46::/64", "2001:4860:4801:47::/64", "2001:4860:4801:48::/64", "2001:4860:4801:49::/64", "2001:4860:4801:4a::/64", "2001:4860:4801:50::/64", "2001:4860:4801:51::/64", "2001:4860:4801:53::/64", "2001:4860:4801:60::/64", "2001:4860:4801:61::/64", "2001:4860:4801:62::/64", "2001:4860:4801:63::/64", "2001:4860:4801:64::/64", "2001:4860:4801:65::/64", "2001:4860:4801:66::/64", "2001:4860:4801:67::/64", "2001:4860:4801:68::/64", "2001:4860:4801:69::/64", "2001:4860:4801:6a::/64", "2001:4860:4801:6b::/64", "2001:4860:4801:6c::/64", "2001:4860:4801:6d::/64", "2001:4860:4801:6e::/64", "2001:4860:4801:6f::/64", "2001:4860:4801:70::/64", "2001:4860:4801:71::/64", "2001:4860:4801:72::/64", "2001:4860:4801:73::/64", "2001:4860:4801:74::/64", "2001:4860:4801:75::/64", "2001:4860:4801:76::/64", "2001:4860:4801:77::/64", "2001:4860:4801:80::/64", "2001:4860:4801:81::/64", "2001:4860:4801:82::/64", "2001:4860:4801:83::/64", "2001:4860:4801:84::/64", "2001:4860:4801:85::/64", "2001:4860:4801:86::/64", "2001:4860:4801:90::/64", "2001:4860:4801:91::/64", "2001:4860:4801:92::/64", "2001:4860:4801::/64", "2001:4860:4801:c::/64", "2001:4860:4801:f::/64", "66.249.64.0/27", "66.249.64.128/27", "66.249.64.160/27", "66.249.64.192/27", "66.249.64.224/27", "66.249.64.32/27", "66.249.64.64/27", "66.249.64.96/27", "66.249.65.0/27", "66.249.65.128/27", "66.249.65.160/27", "66.249.65.192/27", "66.249.65.224/27", "66.249.65.32/27", "66.249.65.64/27", "66.249.65.96/27", "66.249.66.0/27", "66.249.66.128/27", "66.249.66.192/27", "66.249.66.32/27", "66.249.66.64/27", "66.249.68.0/27", "66.249.68.32/27", "66.249.68.64/27", "66.249.69.0/27", "66.249.69.128/27", "66.249.69.160/27", "66.249.69.192/27", "66.249.69.224/27", "66.249.69.32/27", "66.249.69.64/27", "66.249.69.96/27", "66.249.70.0/27", "66.249.70.128/27", "66.249.70.160/27", "66.249.70.192/27", "66.249.70.224/27", "66.249.70.32/27", "66.249.70.64/27", "66.249.70.96/27", "66.249.71.0/27", "66.249.71.128/27", "66.249.71.160/27", "66.249.71.192/27", "66.249.71.32/27", "66.249.71.64/27", "66.249.71.96/27", "66.249.72.0/27", "66.249.72.128/27", "66.249.72.160/27", "66.249.72.192/27", "66.249.72.224/27", "66.249.72.32/27", "66.249.72.64/27", "66.249.72.96/27", "66.249.73.0/27", "66.249.73.128/27", "66.249.73.160/27", "66.249.73.192/27", "66.249.73.224/27", "66.249.73.32/27", "66.249.73.64/27", "66.249.73.96/27", "66.249.74.0/27", "66.249.74.32/27", "66.249.74.64/27", "66.249.74.96/27", "66.249.75.0/27", "66.249.75.128/27", "66.249.75.160/27", "66.249.75.192/27", "66.249.75.224/27", "66.249.75.32/27", "66.249.75.64/27", "66.249.75.96/27", "66.249.76.0/27", "66.249.76.128/27", "66.249.76.160/27", "66.249.76.192/27", "66.249.76.224/27", "66.249.76.32/27", "66.249.76.64/27", "66.249.76.96/27", "66.249.77.0/27", "66.249.77.128/27", "66.249.77.32/27", "66.249.77.64/27", "66.249.77.96/27", "66.249.79.0/27", "66.249.79.128/27", "66.249.79.160/27", "66.249.79.192/27", "66.249.79.224/27", "66.249.79.32/27", "66.249.79.64/27", "66.249.79.96/27", "157.55.39.0/24", "207.46.13.0/24", "40.77.167.0/24", "13.66.139.0/24", "13.66.144.0/24", "52.167.144.0/24", "13.67.10.16/28", "13.69.66.240/28", "13.71.172.224/28", "139.217.52.0/28", "191.233.204.224/28", "20.36.108.32/28", "20.43.120.16/28", "40.79.131.208/28", "40.79.186.176/28", "52.231.148.0/28", "51.8.235.176/28", "51.105.67.0/28");
          if (in_array ($_SERVER['REMOTE_ADDR'], $deny)) {
        if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "googlebot"))
        {
        // En realidad se muestra también con ip de bing y user agent de google y viceversa
        echo '<p>Contenido que se muestra sólo a Googlebot/Bingbot e ip combinadas:<span style="color:green"> ESTE CONTENIDO SOLO SE MUESTRA A GOOGLEBOT con IP de Google.</p></span>';
        }elseif(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "bingbot"))
        {
        echo '<p>Contenido que se muestra sólo a Googlebot/Bingbot e ip combinadas:<span style="color:green"> ESTE CONTENIDO SOLO SE MUESTRA A BINGBOT con IP de Bing.</p></span>';
        }
        else{echo '<p>Contenido que se muestra sólo a Googlebot/bingbot e ip combinadas: <span style="color:red"> NO LO DETECTAS - User AGENT</span></p>';}
        }else{echo '<p>Contenido que se muestra sólo a Googlebot/bingbot e ip combinadas: <span style="color:red"> NO LO DETECTAS - IP</span></p>';}
        ?>

    </section>
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
<script src="/scripts/ofuscacion.js"></script>




