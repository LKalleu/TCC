<?php
//Sessão
session_start();
// COnexão
require_once 'db_connect.php';

if (isset($_POST['btn-cadastrar'])) {
  $nome = mysqli_escape_string($connect, $_POST['nome']);
  $email = mysqli_escape_string($connect, $_POST['email']);
  $senha = mysqli_escape_string($connect, $_POST['senha']);
  $contato = mysqli_escape_string($connect, $_POST['contato']);
  $rua = mysqli_escape_string($connect, $_POST['rua']);
  $bairro = mysqli_escape_string($connect, $_POST['bairro']);
  $numeracao = mysqli_escape_string($connect, $_POST['numeracao']);
  $cep = mysqli_escape_string($connect, $_POST['cep']);
  $prod_comprados = mysqli_escape_string($connect, $_POST['prod_comprados']);

  $sql = "INSERT INTO devedor
  (nome,email,senha,contato,rua,bairro,numeracao,cep,prod_comprados)
  VALUES
  ('$nome','$email','$senha','$contato','$rua','$bairro','$numeracao','$cep','$prod_comprados')";

  if (mysqli_query($connect, $sql)) {
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../index.php');
  }else {
    $_SESSION['mensagem'] = "Erro ao cadastrar!";
    header('Location: ../index.php');
  }

}
 ?>
