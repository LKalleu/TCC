<?php
//Conexão
include_once '../Model/db_connect.php';
//Header
include_once '../Includes/header.php';
//Mensagem
include_once '../Includes/mensagem.php';
?>
<br>
<div class="row container z-depth-3">
  <div class="col s12 m6 l4 white center-align">
    <i class="material-icons blue-text" style="font-size:300px">account_box</i>
  </div>
  <div class="col s12 m6 l8">
    <ul class="collection with-header">
      <li class="collection-header"><h4>Funcionários</h4></li>
      <?php
        $sql = "SELECT * FROM usuario WHERE tipoUsuario = 2";
        $resultado = mysqli_query($connect, $sql);

        while ($dados = mysqli_fetch_array($resultado)) {
       ?>
      <li class="collection-item"> <?php echo $dados['nome']; ?> </li>
    <?php } ?>
    </ul>
  </div>
</div>

<?php
//Footer
  include_once '../Includes/footer.php';
?>
