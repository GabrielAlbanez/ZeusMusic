<?php
require_once("./conexao/conexao.php");

$Nome = $_POST['Nome'];
$Idade = $_POST['Idade'];
$Email = $_POST['Email'];
$Senha = $_POST['Password'];

$registro = $conexao->prepare("INSERT INTO cadastro(Nome,Idade,Email,Senha) VALUES(?,?,?,?)");
$registro->bindParam(1,$Nome);
$registro->bindParam(2,$Idade);
$registro->bindParam(3,$Email);
$registro->bindParam(4,$Senha);

$registro->execute();
header("./pages/login/Login.php");
?>