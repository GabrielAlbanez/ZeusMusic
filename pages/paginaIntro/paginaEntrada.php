<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body> -->

<?php
require_once("./partials/header.php")
?>


<div class="navbar">
  <div class="text">
    <h1>ZeusMusic</h1>
  </div>
  <div class="form1">
    <div class="">
      <a href="../login/Login.php">
        <button type="button" class="btn btn-outline-light">Logar</button>
      </a>
    </div>
    <div class="">
      <button type="button" class="btn btn-outline-light">Registrar</button>
    </div>
  </div>
</div>

<section class="opacidade">
  <div class="opacity">
    <div class="textoBody">
      <h1 class="fs-1">"Seja Bem Vindo a Zeus-Music"</h1>
    </div>
    <div class="textoBody2">
      <h1 class="fs-1">
        “Oferecemos uma ampla variedade de gêneros musicais”
      </h1>
    </div>
    <div class="ondasonora">
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>
      <span class="barras"></span>

    </div>


  </div>
  <div class="degrade-vertical">
    <div class="conteudoTopicos">
      <h1>Zeus</h1>
      <h1>O melhor Site de Musica</h1>
      <div class="divTopicos">
        <div class="divic">
          <div class="diviconn">
            <img src="../../img/checkmark.png" alt="" class="iconImg" />
          </div>
          <div class="textoBody3">
            <h1 class="fs-2">Musicas de Qualidade</h1>
          </div>
        </div>
        <div class="divic">
          <div class="diviconn">
            <img src="../../img/checkmark.png" alt="" class="iconImg" />
          </div>
          <div class="textoBody3">
            <h1 class="fs-2">Totalmente Gratuito</h1>
          </div>
        </div>
        <div class="divic">
          <div class="diviconn">
            <img src="../../img/checkmark.png" alt="" class="iconImg" />
          </div>
          <div class="textoBody3">
            <h1 class="fs-2">Aplicação Simples e Intuitiva</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="palyerMusic">
      <div class="imgcard"><img src="../../img/535863-land-of-fire.jpg" alt="" class="imgg"></div>
      <div class="descrição">
        <h2>nome da musica</h2>
        <p>nome do autor</p>
      </div>
      <div class="BarTemp">
        <div class="barrinha">
          <progress value="0" max="1"></progress>
          <div class="bolinha"></div>
        </div>
        <div class="tempo">
          <p class="inicio">0:00</p>
          <p class="fim">0:00</p>
        </div>
        <div class="botoês">
          <i class="fas fa-step-backward setas anterior"></i>
          <i class="fas fa-play-circle botao-play"></i>
          <i class="fas fa-pause-circle botao-pause"></i>
          <i class="fas fa-step-forward setas proxima"></i>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<audio src="../../musicas/KORDHELL_-_LAND_OF_FIRE.mp3" id="music"></audio>
<script src="./music.js"></script>
<!-- </body>
</html> -->

<?php
require_once("./partials/footer.php")
?>