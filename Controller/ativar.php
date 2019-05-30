<?php
//Sessão
session_start();
// COnexão
require_once '../Model/db_connect.php';

if (isset($_POST['btn-ativar'])) {

  $id = mysqli_escape_string($connect, $_POST['id']);

  $sql = "UPDATE devedor SET status = '1' WHERE id = '$id' ";

  if (mysqli_query($connect, $sql)) {
    $_SESSION['mensagem'] = "Ativado com sucesso!";
    header('Location: ../View/devedores.php');
  }else {
    $_SESSION['mensagem'] = "Erro ao ativar!";
    header('Location: ../View/devedores.php');
  }

}
 ?>
