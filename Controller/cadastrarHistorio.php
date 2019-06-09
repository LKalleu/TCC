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

if (isset($_POST['cadastrarHistorico'])) {
  $data = clear($_POST['data']);
  $fornecedor = clear($_POST['fornecedor']);
  $quantidade = clear($_POST['quantidade']);
  $produtos = clear($_POST['produtos']);

  $sql = "INSERT INTO devedor
  (nome,produto,fornecedor,quantidade)
  VALUES
  ('$nome','$produtos','$fornecedor','$quantidade)";

  if (mysqli_query($connect, $sql)) {
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../View/historico.php');
  }else {
    $_SESSION['mensagem'] = "Erro ao cadastrar!";
    header('Location: ../View/historico.php');
  }

}
 ?>
