<?php
//Sessão
session_start();
// COnexão
require_once '../Model/db_connect.php';

if (isset($_POST['btn-editar'])) {

  $nome = mysqli_escape_string($connect, $_POST['nome']);
  $email = mysqli_escape_string($connect, $_POST['email']);
  $senha = mysqli_escape_string($connect, $_POST['senha']);
  $contato = mysqli_escape_string($connect, $_POST['contato']);
  $rua = mysqli_escape_string($connect, $_POST['rua']);
  $bairro = mysqli_escape_string($connect, $_POST['bairro']);
  $numeracao = mysqli_escape_string($connect, $_POST['numeracao']);
  $cep = mysqli_escape_string($connect, $_POST['cep']);
  $prod_comprados = mysqli_escape_string($connect, $_POST['prod_comprados']);

  $id = mysqli_escape_string($connect, $_POST['id']);

  $sql = "UPDATE devedor SET nome = '$nome', email = '$email', senha = '$senha', contato = '$contato', rua = '$rua', bairro = '$bairro', numeracao = '$numeracao', cep = '$cep', prod_comprados = '$prod_comprados' WHERE id = '$id' ";

  if (mysqli_query($connect, $sql)) {
    $_SESSION['mensagem'] = "Editado com sucesso!";
    header('Location: ../View/devedores.php');
  }else {
    $_SESSION['mensagem'] = "Erro ao editar!";
    header('Location: ../View/devedores.phpp');
  }

}
 ?>
