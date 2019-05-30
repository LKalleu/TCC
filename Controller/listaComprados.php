<?php
//Conexão
include_once '../Model/db_connect.php';
//Header
include_once '../Includes/header.php';
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

<!-- TABELA DE DÍVIDAS -->
<br>
<div class="row">
  <div class="col s12 m10 push-m1">
    <h4 class="light center blue-text">Lista de Produtos Comprados</h4>
    <table class="centered z-depth-2 white">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Preço</th>
        </tr>
      </thead>

      <tbody class="">
        <tr>
           <?php
              $produtosFK = $dados['produto'];
              $sql3 = "SELECT * FROM produtos WHERE idProduto = '$produtosFK'";
              $resultado3 = mysqli_query($connect, $sql3);
              while($dados3 = mysqli_fetch_array($resultado3)):
            ?>
          <td> <?php echo $dados3['nome'] ?> </td>
          <td> <?php echo $dados3['preco'] ?> </td>
        <?php endwhile; ?>
        </tr>
      </tbody>
    </table>
    <br>
    <a href="../View/devedores.php" class="btn green" name="">Lista de Clientes</a>
  </div>
</div>



<?php
//Footer
  include_once '../Includes/footer.php';
?>

<script type="text/javascript">
$(document).ready(function() {
  $('select').material_select();
});

$(document).ready(function(){
  var $contato = $("#contato");
  $contato.mask('(00) 0 0000-0000');
});

$(document).ready(function(){
  var $cep = $("#cep");
  $cep.mask('00000-000');
});
</script>
