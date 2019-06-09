<?php
//Sessão
session_start();
// COnexão
require_once '../Model/db_connect.php';
//Clear
function clear($input) {
  global $connect;
  // sql
  $var = mysqli_escape_string($connect ,$input);
  // xss
  $var = htmlspecialchars($var);
  return $var;

}

if (isset($_POST['btn-cadastrar'])) {
  $nome = clear($_POST['nome']);
  $email = clear($_POST['email']);
  $senha = clear($_POST['senha']);
  $contato = clear($_POST['contato']);
  $rua = clear($_POST['rua']);
  $bairro = clear($_POST['bairro']);
  $numeracao = clear($_POST['numeracao']);
  $cep = clear($_POST['cep']);

  $sql = "INSERT INTO devedor
  (nome,email,senha,contato,rua,bairro,numeracao,cep)
  VALUES
  ('$nome','$email','$senha','$contato','$rua','$bairro','$numeracao','$cep')";

  if (mysqli_query($connect, $sql)) {
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../View/devedores.php');
  }else {
    $_SESSION['mensagem'] = "Erro ao cadastrar!";
    header('Location: ../View/devedores.php');
  }

}
 ?>
