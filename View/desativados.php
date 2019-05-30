<?php
//Conexão
include_once '../Model/db_connect.php';
//Header
include_once '../Includes/header.php';
//Mensagem
include_once '../Includes/mensagem.php';
?>

<!-- TABELA DE DÍVIDAS -->
<br>
<div class="row">
  <div class="col s12 m10 offset-m1">
    <h4 class="light center red-text">Pessoas Desativadas</h4>
    <table class="responsive-table z-depth-2 white">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>Contato</th>
        </tr>
      </thead>

      <tbody class="">
        <?php
        $sql = "SELECT * FROM devedor";
        $resultado = mysqli_query($connect, $sql);

        while($dados = mysqli_fetch_array($resultado)):
          if ($dados['status'] == 2) {
         ?>
        <tr>
          <td> <?php echo $dados['nome'] ?> </td>
          <td> <?php echo $dados['email'] ?> </td>
          <td> <?php echo $dados['contato'] ?> </td>
          <td> <a href="../Controller/editar.php?id= <?php echo $dados['id'] ?>" class="btn-floating blue"><i class="material-icons">edit</i> </td>
          <td> <a href="#modal<?php echo $dados['id'] ?>" class="btn-floating green btn modal-trigger" name="btn-ativar"> <i class="material-icons">done</i> </a> </td>
        </tr>

        <!-- Modal Structure -->
        <div id="modal<?php echo$dados['id']?>" class="modal">
          <div class="modal-content">
            <h4>Opa!</h4>
            <p>Tem certeza que deseja ativar este Cliente ?</p>
          </div>
          <div class="modal-footer">

            <form class="" action="../Controller/ativar.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
              <button type="submit" name="btn-ativar" class="btn-flat red-text">Sim</button>
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
            </form>
          </div>
        </div>
      <?php }; endwhile; ?>
      </tbody>
    </table>
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
