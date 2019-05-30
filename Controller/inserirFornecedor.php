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

if (isset($_POST['btn-inserirFornecedor'])) {
  $nome = clear($_POST['nome']);
  $email = clear($_POST['email']);
  $contato = clear($_POST['contato']);
  $cpf = clear($_POST['cpf']);

  $sql = "INSERT INTO fornecedor
  (nome, email, contato, cpf)
  VALUES
  ('$nome','$email','$contato','$cpf')";

  if (mysqli_query($connect, $sql)) {
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../View/fornecedores.php');
  }else {
    $_SESSION['mensagem'] = "Erro ao cadastrar!";
    header('Location: ../View/fornecedores.php');
  }

}
 ?>
