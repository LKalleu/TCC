<?php
//Sessão
session_start();
// COnexão
require_once '../Model/db_connect.php';

if (isset($_POST['btn-atualizar'])) {

  $preco = mysqli_escape_string($connect, $_POST['preco']);

  $id = mysqli_escape_string($connect, $_POST['id']);

  $sql = "UPDATE produtos SET preco = '$preco' WHERE idProduto = '$id' ";

  if (mysqli_query($connect, $sql)) {
    $_SESSION['mensagem'] = "Editado com sucesso!";
    header('Location: ../View/produtos.php');
  }else {
    $_SESSION['mensagem'] = "Erro ao editar!";
    header('Location: ../View/produtos.php');
  }

}
 ?>
