<?php
//Conexão
include_once '../Model/db_connect.php';
//Header
include_once '../Includes/header.php';
//Mensagem
include_once '../Includes/mensagem.php';
?>

<div class="fixed-action-btn horizontal">
<a href="../Controller/adicionar.php" class="btn-floating btn-large red"><i class="large material-icons">add</i></a>
</div>



<!-- TABELA DE DÍVIDAS -->
<br>
<div class="row">
  <div class="col s12 m10 push-m1">
    <h4 class="light center blue-text">Histórico</h4>
    <table class="centered z-depth-2 white">
      <thead>
        <tr>
          <th>Data</th>
          <th>Produtos</th>
          <th>Fornecedor</th>
          <th>Quantidade</th>
        </tr>
      </thead>

      <tbody class="">
        <?php
        $sql = "SELECT * FROM historico";
        $resultado = mysqli_query($connect, $sql);

        while($dados = mysqli_fetch_array($resultado)):
         ?>
        <tr>
          <td> <?php echo $dados['data'] ?> </td>
          <td> <a href="#" class="btn red lighten-1">Relatório</a> </td>
           <?php
              $fornecedorFK = $dados['fornecedor'];
              $sql3 = "SELECT * FROM fornecedor WHERE idFornecedor = '$fornecedorFK'";
              $resultado3 = mysqli_query($connect, $sql3);
              while($dados3 = mysqli_fetch_array($resultado3)):
            ?>
          <td> <?php echo $dados3['nome'] ?> </td>
        <?php endwhile; ?>
          <td> <?php echo $dados['quantidade'] ?> </td>
        </tr>
      <?php endwhile; ?>
      </tbody>
    </table>
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
