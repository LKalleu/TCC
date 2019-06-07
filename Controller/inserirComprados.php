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

if (isset($_POST['btn-inserirComprados'])) {
  $id = clear($_POST['id']);
  $produtos = clear($_POST['produtos']);
  $data = clear($_POST['data']);
  $quantidade = clear($_POST['quantidade']);

  $sql = "INSERT INTO comprados
  (data, devedor, produtos, quantidade)
  VALUES
  ('$data','$id','$produtos','$quantidade')";


  if (mysqli_query($connect, $sql)) {
    $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    header('Location: ../View/devedores.php');
  }else {
    $_SESSION['mensagem'] = "Erro ao cadastrar!";
    header('Location: ../View/devedores.php');
  }

}
 ?>
