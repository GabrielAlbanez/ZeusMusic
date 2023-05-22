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
    <link rel="stylesheet" href="./login.css" />
  </head> -->
<?php
require_once("./php/partials/header.php")

?>

<div class="fundo">
  <div class="voltarIncio">
    <div> <a href="../paginaIntro/paginaEntrada.php"> <img src="../../img/left-arrow.png" alt="" class="iconArrow"> </a></div>
    <div>voltar</div>
  </div>
  <div class="formulario">

    <div class="divTexto">
      <p class="Text">Login</p>
    </div>
    <div class="seguradoraInput">
      <div class="inputEmail">
        <div class="divEvoltaLabel">
          <label for="" class="labelEmail">Email</label>
        </div>

        <div class="divPegaInput">
          <div class="icons"><img src="../../img/gmail.png" alt="" class="tamhoIMG"></div>
          <form action="">
            <input type="email" name="" id="" class="input" />
          </form>

        </div>
        <div class="espaco"></div>
      </div>
      <div class="inputPassword">
        <div class="divEvoltaLabel">
          <label for="" class="labelSenha">Password</label>
        </div>

        <div>
          <div class="icons"><img src="../../img/security.png" alt="" class="tamhoIMG"></div>
          <form action="">
            <input type="password" name="" id="" class="input" />
          </form>

        </div>
        <div class="espaco"></div>
        <div class="abaixoInput">
          <div class="LembrarSenha">
            <input type="checkbox" name="" id="">
            <label for="">Lembrar Senha</label>
          </div>
          <div class="Registrar">
            <a href="../registrar/Registrar.php">
              <p> <img src="../../img/touch.png" alt="" class="iconeClick"> Registre-se</p>
            </a>
          </div>
        </div>
        <div class="botaoLogin">
          <button class="button">Logar</button>
          <div class="EsquciSenha">
            <img src="../../img/touch.png" alt="" class="iconeClick2">
            <a href="">
              <p>Esqueci Minha Senha</p>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<?php
require_once("./php/partials/footer.php")

?>
<!-- </body>
</html> -->