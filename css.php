<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="/css/estilo.css">
    <title>CSS | Master SEO Test</title>
    <!-- ¿CÓMO SE PODRÍA HACER AQUÍ PARA INCLUIR EL HEADER EN PHP Y LAS ETIQUETAS STYLE?
    Respuesta: Simplemente podrías crear otro header, llamado, por ejemplo, header-css.php, en él
    incluyes todo el header y las etiquetas y solo lo llamas en esta página 
    -->   
    <style>
     /* Toda clase que contenga prueba y css */
      .prueba.css {
        font-size: 20px;
      }
    /* Elemento con id="introducción" */
      #introducción {
        background: blueviolet;
        padding: 10px 50px;
      }
    /*.mainheading  | Toda clase que contengan mainheading */
      .mainheading {
        font-size: xxx-large;
      }
      .elemento {
        font-size: 22px;
      }
    /*h2.mainheading  | Toda h2 que contenga en la clase mainheading */
      h2.mainheading {
        font-size: 40px;
      }
    /*.ejemplo1, .ejemplo2  | Toda elementos que contenga como clase ejemplo1 o ejemplo2 */
      .ejemplo1, .ejemplo2 {
         color: blue;
      }
    /*.herencias p  | Toda p que esté dentro de un div con clase herencias */
      .herencias p {
         color: brown;
      }
    /*.herencias > p  | Toda p que esté directamente por debajo de un div con clase herencias */
      .herencias > p {
         color: blueviolet;
      }
      .centimetros {
          margin-left: 5vw;
          margin-top: 5vh;
          padding: 49px;
          background: brown;
          width: 10cm;
          height: 10cm;
      }
    /*Uso de display flex */

      .preguntas-frecuentes {
          display: flex;
          justify-content: space-around;
          align-items: center;
          margin-bottom: 20px;
      }

      .container {
        position: relative;
      }

      .black-box {
        position: relative;
        border: 2px solid black;
        height: 100px;
        margin: 30px;
        z-index: 3;
      }

      .gray-box {
        position: absolute;
        background: lightgray;
        height: 60px;  
        width: 70%;
        left: 50px;
        top: 50px;
        z-index: 1;
      }

      .green-box {
        position: absolute;
        background: lightgreen;
        width: 35%;
        left: 270px;
        top: -15px;
        height: 100px;
        z-index: 2;
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
    <section id="introducción">
        <H1 class="mainheading h1">Explicación de CSS</H1>
    </section>
    <section id="explicacion-apartado">
        <h2 class="mainheading h2">Selectores</h2>
        <div class="prueba css primer parrafo">Los selectores son la forma en la que hacemos <b>alusión y mención a un elemento</b>. Esto es importante porque nos va a permitir
            poner un est2ilo peculiar al elemento que queramos
        </div>
        <img src="/imagenes/tabla-selectores-css.png" alt="tabla de selectores de css" style="width: 621px; height: 805x;">
        <div class="herencias">
          <div class="parrafo1">
            <p>La diferencia fundamental entre que contenga p o que descienda, es que para descender
              tiene que estar directamente debajo, y que para que lo contenga simplemente debe estar debajo en algún punto.</p>
          </div>
            <p>Párrafo 2</p>
      </div>
      </section>
    <section>
      <h2 class="mainheading h2">Carga del CSS</h2>
      <div class="prueba css segundo parrafo"><span class="ejemplo0" style="color: brown;">CSS significa carga de estílos en cascadas, lo que implica que lo que está abajo prioriza a lo que va arriba.
        En el caso de que haya estilos contrapuestos, se respetará la última regla.</span><br><span class="ejemplo1">No obstante, esto es perjudicial
        para la carga puesto que, no únicamente le añades código ínutil al CSS, sino que perjudica la experiencia de usuario
        al cargarse en primer lugar una cosa y modificarla a posteriori con la otra.</span>
      </div>
    </section>
    <section>
      <h2>Z-index</h2>
      <div class="container">
        <div class="black-box">Black box</div>
        <div class="gray-box">Gray box</div>
        <div class="green-box">Green box</div>
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
              <td class="elemento tabla">Fila 2 columna 1</td>
              <td>Fila 2 columna 2</td>
              <td>Fila 2 columna 3</td>
            </tr>
            <tr>
              <td>Fila 3 columna 1</td>
              <td class="ejemplo2">Fila 3 columna 2</td>
              <td>Fila 3 columna 3</td>
            </tr>
        </table>
  </section>
  <section id="ejercicio-medidas">
    <H2>EJERCICIO DE CENTÍMETROS</H2>
    <div class="centimetros">10 CENTÍMETROS</div>
    <div class="position">Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.
    </div>
  </section>
  <section id="faqs">
    <h2>Preguntas frecuentes</h2>
    <div class="preguntas-frecuentes">
      <details>
        <summary class="elemento desplegable">Pregunta frecuente 1</summary>
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
    </div>
  </section>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';?>