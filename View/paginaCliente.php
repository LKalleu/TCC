<?php
//Conexão
include_once '../Model/db_connect.php';
//Mensagem
include_once '../Includes/mensagem.php';

//Select
if (isset($_GET['id'])) {
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql = "SELECT * FROM comprados WHERE devedor = '$id' ";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
}
?>

<?php
if (isset($_GET['id'])) {
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql2 = "SELECT * FROM devedor WHERE id = '$id' ";
  $resultado2 = mysqli_query($connect, $sql2);
  $dados2 = mysqli_fetch_array($resultado2);
}
 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
   <head>
     <meta charset="utf-8">
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <link rel="shortcut icon" href="../Public/img/icon.png" type="image/x-icon">
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>Mercearia São José</title>
   </head>

   <body style="background-image: url(../Public/img/detalhe.png); background-size: 100%; background-repeat: no-repeat;">

<!-- TABELA DE DÍVIDAS -->
<br>
<div class="row">
  <div class="col s12 m10 push-m1">
    <h4 class="light center blue-text">Lista de Produtos Comprados</h4>
    <table class="centered z-depth-2 white">
      <thead>
        <tr>
          <th>Data</th>
          <th>Produtos</th>
          <th>Quantidade Total</th>
        </tr>
      </thead>

      <tbody class="">
        <tr>
           <?php
              $sql3 = "SELECT * FROM comprados WHERE devedor = '$id'";
              $resultado3 = mysqli_query($connect, $sql3);
              while($dados3 = mysqli_fetch_array($resultado3)):
            ?>
          <td> <?php echo $dados3['data'] ?> </td>
          <td> <?php echo $dados3['produtos'] ?> </td>
          <td> <?php echo $dados3['quantidade'] ?> </td>
          <td>  </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
    <br>
    <a href="../Controller/sair.php" class="btn red" name="">Sair</a>
  </div>
</div>



<?php
//Footer
  include_once '../Includes/footer.php';
?>
