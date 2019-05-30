<?php
//Conexão
include_once '../Model/db_connect.php';
//Header
include_once '../Includes/header.php';
//Mensagem
include_once '../Includes/mensagem.php';
?>

<!-- Modal Trigger -->
<div class="fixed-action-btn horizontal">
  <a class="btn-floating btn-large red modal-trigger" href="#modal1">
    <i class="large material-icons">add</i>
  </a>
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h3 class="light center">Novo Fornecedor</h3>
    <div class="row">
      <div class="col s12">
        <form class="" action="../Controller/inserirFornecedor.php" method="POST">
          <div class="input-field col s12 m6">
            <input type="text" name="nome" id="nome" value="">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" name="email" id="email" value="">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" name="contato" id="contato" value=""  maxlength="16">
            <label for="contato">Contato</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" name="cpf" id="cpf" value="">
            <label for="cpf">Cpf</label>
          </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn-flat blue-text" name="btn-inserirFornecedor">Cadastrar</button>
        </form>
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
  </div>
</div>



<!-- TABELA DE DÍVIDAS -->
<br>
<div class="row">
  <div class="col s12 m10 push-m1">
    <h4 class="light center blue-text">Fornecedores</h4>
    <table class="centered z-depth-2 white">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>Contato</th>
          <th>CPF</th>
        </tr>
      </thead>

      <tbody class="">
        <?php
        $sql = "SELECT * FROM fornecedor";
        $resultado = mysqli_query($connect, $sql);

        while($dados = mysqli_fetch_array($resultado)):
         ?>
        <tr>
          <td> <?php echo $dados['nome'] ?> </td>
          <td> <?php echo $dados['email'] ?> </td>
          <td> <?php echo $dados['contato'] ?> </td>
          <td> <?php echo $dados['cpf'] ?> </td>
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
