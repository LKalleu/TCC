<?php
//Conexão
include_once '../Model/db_connect.php';
//Header
include_once '../Includes/header.php';
//Mensagem
include_once '../Includes/mensagem.php';
?>
<br>

<div class="row container">
  <nav class="">
    <div class="nav-wrapper">
      <form method="POST" id="form-pesquisa">
        <div class="input-field">
          <input id="pesquisa" type="search" required class="indigo darken-3 white-text" name="pesquisa" placeholder="Digite uma data, ex: 00/00/000">
          <label class="label-icon" for="pesquisa"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>
</div>


<!-- Modal Trigger -->
    <div class="fixed-action-btn">
      <a class="btn-floating btn-large red modal-trigger" href="#modal1">
        <i class="large material-icons">add</i>
      </a>
    </div>

<!-- Modal Structure -->
<div id="modal1" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4 class="light center">Cadastrar no Histórico</h4>
    <div class="row">
      <form class="col s12" action="" method="POST">
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="00/00/0000" id="data" type="text" name="data" class="validate">
            <label for="data">Data de Recebimento</label>
          </div>
          <div class="input-field col s12">
            <input placeholder="Digite o nome do fornecedor" id="fornecedor" type="text" name="fornecedor" class="validate">
            <label for="fornecedor">Fornecedor</label>
          </div>
          <div class="input-field col s12">
            <input placeholder="Digite a quantidade de itens" id="quantidade" type="text" name="quantidade" class="validate">
            <label for="quantidade">Quantidade</label>
          </div>
          <div class="input-field col s12">
            <input placeholder="Ex: Maçã" id="produtos" type="text" name="produtos" class="validate">
            <label for="produtos">Produtos</label>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
  </div>
</div>



<!-- TABELA DE DÍVIDAS -->
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
          <td> <?php echo $dados['produto'] ?> </td>
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
