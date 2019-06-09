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
  $categoria = clear($_POST['categoria']);

  $sql = "INSERT INTO categoria
  (descricao)
  VALUES
  ('$categoria')";

  if (mysqli_query($connect, $sql)) {
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../View/produtos.php');
  }else {
    $_SESSION['mensagem'] = "Erro ao cadastrar!";
    header('Location: ../View/produtos.php');
  }

}
 ?>
