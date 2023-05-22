
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
    <link rel="stylesheet" href="./registro.css" />
  </head>
  <body> -->

<?php
require_once("./php/partials/header.php");
require_once("../../conexao/conexao.php");

?>


    <div class="fundo">
      <div class="voltarIncio">
        <div> <a href="../paginaIntro/paginaEntrada.php"> <img src="../../img/left-arrow.png" alt="" class="iconArrow"> </a></div>
         <div>voltar</div>
    </div>

  
      <div class="formulario">



        <div class="seguradoraInput">
            <div class="divRegistrar"><p class="Text">Registre-se</p> </div>
       
            <div class="inputEmail">
            
            <div class="divEvoltaLabel">
              <label for="" class="labelEmail">Nome</label>
            </div>
          
            <div class="divPegaInput">
              <div class="icons"><img src="../../img/user.png" alt="" class="tamhoIMG"></div>
              <form action="./php/registro.php" method="post">
              <input type="email" name="Nome" id="" class="input" />
            </form>
           
            </div>
            <div class="espaco"></div>
          </div>

          <div class="inputEmail">
            
            <div class="divEvoltaLabel">
              <label for="" class="labelEmail">Idade</label>
            </div>
          
            <div class="divPegaInput">
              <div class="icons"><img src="../../img/user.png" alt="" class="tamhoIMG"></div>
              <form action="./php/registro.php" method="post">
              <input type="email" name="Idade" id="" class="input" />
            </form>
            </div>
            <div class="espaco"></div>
          </div>


          <div class="inputEmail">
            
            <div class="divEvoltaLabel">
              <label for="" class="labelEmail">Email</label>
            </div>
          
            <div class="divPegaInput">
              <div class="icons"><img src="../../img/envelope.png" alt="" class="tamhoIMG"></div>
              <form action="./php/registro.php" method="post">
              <input type="email" name="Email" id="" class="input" />
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
              <form action="./php/registro.php" method="post">
              <input type="password" name="Password" id="" class="input" />
            </form>
            </div>
            </div>
            </div>
            <form action="./php/registro.php" method="post">
            <button class="button" type="submit">Regitrar</button>
            </form>
          </div>
          </div>
           <div class="botaoLogin">
           
       
        </div>
      </div>
    </div>
  <!-- </body>
</html> -->
<?php
require_once("./php/partials/header.php")

?>