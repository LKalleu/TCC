<?php
//Sessão
session_start();
// COnexão
require_once 'db_connect.php';
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
  $prod_comprados = clear($_POST['prod_comprados']);

  $sql = "INSERT INTO devedor
  (nome,email,senha,contato,rua,bairro,numeracao,cep,prod_comprados)
  VALUES
  ('$nome','$email','$senha','$contato','$rua','$bairro','$numeracao','$cep','$prod_comprados')";

  if (mysqli_query($connect, $sql)) {
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../View/devedor.php');
  }else {
    $_SESSION['mensagem'] = "Erro ao cadastrar!";
    header('Location: ../View/devedor.php');
  }

}
 ?>
