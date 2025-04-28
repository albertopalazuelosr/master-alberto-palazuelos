<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hola, Alberto</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Georgia, serif;
      background-color: #000;
      color: white;
    }

    .container {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: flex-start;
      padding: 40px;
      gap: 40px;
      max-width: 1200px;
      margin: auto;
    }

    .left {
      flex: 2;
    }

    .right {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
    }

    h1 {
      font-size: 4rem;
      margin: 0;
      line-height: 1;
    }

    h2 {
      font-size: 2rem;
      font-weight: normal;
    }

    p {
      font-size: 1.1rem;
      line-height: 1.6;
      margin: 1em 0;
    }

    a {
      color: #fff;
      text-decoration: underline;
    }

    .email {
      margin-top: 2em;
    }

    .coffee {
      margin-top: 2em;
      font-weight: bold;
    }

    img {
      width: 100%;
      border-radius: 8px;
    }

    .social-icons {
      position: absolute;
      top: 10px;
      right: 10px;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .social-icons a {
      background-color: #eed064;
      border-radius: 50%;
      width: 35px;
      height: 35px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-decoration: none;
      font-size: 18px;
      color: black;
      transition: background 0.3s;
    }

    .social-icons a:hover {
      background-color: #ddd;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        text-align: center;
      }
      .right {
        order: -1;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="left">
      <h1>Hola,<br>Alberto Palazuelos here.</h1>
      <p><strong>Welcome to this site I</strong> created as a result of having bought a domain with my name in it.</p>

      <p>🐥 <strong>Tweet-pitch:</strong> I'm terrified about routine. Right now, making our clients grow at <a href="#">SCA</a>.</p>

      <p>❤️ <strong>What I like:</strong> Tech-stuff, finance, philosophy and gasoline.</p>

      <p>🔍 <strong>Looking for:</strong> Brain-blowing projects, start-ups to mentor and teaching opportunities.</p>

      <p>💡 <strong>Some good books:</strong>
        <a href="#">The Richest Man in Babylon</a>, 
        <a href="#">The 5AM Club</a>, 
        <a href="#">The Daily Stoic</a>.
      </p>

      <p class="email">📧 <a href="mailto:info@albertorc.com">hola@albertopalazuelos.com</a></p>
      <p class="coffee"><a href="https://zcal.co/i/4M93WE1W">Fancy a coffee?</a> ☕</p>
    </div>

    <div class="right">
      <img src="imagenes\hand-pointer.png" title="Ey, ¡it´s me!" alt="Alberto" />
      <div class="social-icons">
        <a href="https://www.linkedin.com/in/alberto-palazuelos-riendas/" title="LinkedIn">in</a>
        <a href="https://open.spotify.com/show/5X2MnMb52NBe3E6wveRabe" title="My podcast">🎙️</a>
      </div>
    </div>
  </div>
</body>
</html>
