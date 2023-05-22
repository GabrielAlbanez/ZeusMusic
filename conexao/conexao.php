<?php
global $conexao;
$porta = "localhost";
$nomeBanco = "zeus_music";
$usuarioDoBanco  = "root";
$senhaDoBanco  = "";
$conexao = new PDO("mysql:host=$porta; dbname=$nomeBanco", "$usuarioDoBanco", "$senhaDoBanco") or die ("não foi possivel fazer a conectar");
?>


