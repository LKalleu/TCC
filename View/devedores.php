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
  <div class="col s12 m6">
    <h4 class="light center red-text">Devedores</h4>
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
          if ($dados['prod_comprados'] == NULL) {
         ?>
        <tr>
          <td> <?php echo $dados['nome'] ?> </td>
          <td> <?php echo $dados['email'] ?> </td>
          <td> <?php echo $dados['contato'] ?> </td>
          <td> <a href="../Controller/editar.php?id= <?php echo $dados['id'] ?>" class="btn-floating blue"><i class="material-icons">edit</i> </td>
          <td> <a href="#modal<?php echo $dados['id'] ?>" class="btn-floating green btn modal-trigger" name="btn-desativar"> <i class="material-icons">done</i> </a> </td>
        </tr>

        <!-- Modal Structure -->
        <div id="modal<?php echo$dados['id']?>" class="modal">
          <div class="modal-content">
            <h4>Opa!</h4>
            <p>Tem certeza que deseja desativar este Cliente da tabela de Devedores ?</p>
          </div>
          <div class="modal-footer">

            <form class="" action="php_action/desativar.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
              <button type="submit" name="btn-desativar" class="btn-flat red-text">Sim</button>
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
            </form>
          </div>
        </div>
      <?php }; endwhile; ?>
      </tbody>
    </table>
  </div>


  <!-- TABELA DE DÍVIDAS PAGAS -->

  <div class="col s12 m6">
    <h4 class="light center green-text">Clientes</h4>
    <table class="responsive-table z-depth-2 white">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>Contato</th>
        </tr>
      </thead>

      <tbody>
        <?php
        $sql = "SELECT * FROM devedor";

        $resultado = mysqli_query($connect, $sql);



        while($dados = mysqli_fetch_array($resultado)):
          if ($dados['prod_comprados'] >= 1) {
         ?>
        <tr>
          <td> <?php echo $dados['nome'] ?> </td>
          <td> <?php echo $dados['email'] ?> </td>
          <td> <?php echo $dados['contato'] ?> </td>
          <td> <a href="../Controller/editar.php?id= <?php echo $dados['id'] ?>" class="btn-floating blue"><i class="material-icons">edit</i> </td>
          <td> <a href="#comprados<?php echo $dados['id'] ?>" class="btn-floating purple darken-3 btn modal-trigger" name="btn-desativar"> <i class="material-icons">add</i> </a> </td>
        </tr>


        <!-- ADICIONAR PRODUTOS AO USUÁRIO -->
        <div id="comprados<?php echo$dados['id']?>" class="modal modal-fixed-footer">
          <div class="modal-content">
            <h4 class="center">Escolha os produtos</h4>
            <hr>
            <br>
            <form class="col s12" action="../Controller/inserirComprados.php" method="POST">
              <div class="input-field col s12">
                <select multiple>
                  <option value="" disabled selected>Selecione</option>
                <?php
                $sqlProdutos = "SELECT * FROM produtos";
                $resultadoProdutos = mysqli_query($connect, $sqlProdutos);
                while ($produtos = mysqli_fetch_assoc($resultadoProdutos)) {
                  ?>
                  <option value=" <?php echo $produtos['idProduto'] ?> "> <?php echo $produtos['nome'] ?> </option>
                <?php } ?>
               </select>
               <label>Escolha os produtos</label>
              </div>
            </form>
          </div>
          <div class="modal-footer">
              <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
              <button type="submit" name="btn-inserirComprados" class="btn-flat green-text">Inserir Produtos</button>
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
            </form>
          </div>
        </div>

      <?php } endwhile;  ?>
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
