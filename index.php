<?php
//Conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//Mensagem
include_once 'includes/mensagem.php';
?>

<!-- TABELA DE DÍVIDAS -->

<div class="row">
  <div class="col s12 m6">
    <h4 class="light center red-text">Em dívida</h4>
    <table class="responsive-table">
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
          if ($dados['status'] == 1) {
         ?>
        <tr>
          <td> <?php echo $dados['nome'] ?> </td>
          <td> <?php echo $dados['email'] ?> </td>
          <td> <?php echo $dados['contato'] ?> </td>
          <td> <a href="editar.php?id= <?php echo $dados['id'] ?>" class="btn-floating blue"><i class="material-icons">edit</i> </td>
          <td> <a href="#modal<?php echo $dados['id'] ?>" class="btn-floating green btn modal-trigger" name="btn-desativar"> <i class="material-icons">done</i> </a> </td>
        </tr>

        <!-- Modal Structure -->
        <div id="modal<?php echo$dados['id']?>" class="modal">
          <div class="modal-content">
            <h4>Opa!</h4>
            <p>Tem certez que deseja desativar este Cliente da tabela de Devedores ?</p>
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
    <br>
    <a href="adicionar.php" class="btn">Adicionar Cliente</a>
  </div>

  <!-- TABELA DE DÍVIDAS PAGAS -->

  <div class="col s12 m6">
    <h4 class="light center green-text">Dívidas Pagas</h4>
    <table class="responsive-table">
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
          if ($dados['status'] == 2) {
         ?>
        <tr>
          <td> <?php echo $dados['nome'] ?> </td>
          <td> <?php echo $dados['email'] ?> </td>
          <td> <?php echo $dados['contato'] ?> </td>
          <td> <a href="editar.php?id= <?php echo $dados['id'] ?>" class="btn-floating blue"><i class="material-icons">edit</i> </td>
          <td> <a href="#modal<?php echo $dados['id'] ?>" class="btn-floating green btn modal-trigger" name="btn-desativar"> <i class="material-icons">add</i> </a> </td>
        </tr>

        <!-- Modal Structure -->
        <div id="modal<?php echo$dados['id']?>" class="modal">
          <div class="modal-content">
            <h4>Opa!</h4>
            <p>Tem certez que deseja desativar este Cliente da tabela de Devedores ?</p>
          </div>
          <div class="modal-footer">

            <form class="" action="php_action/desativar.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
              <button type="submit" name="btn-desativar" class="btn-flat red-text">Sim</button>
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
  include_once 'includes/footer.php';
?>
