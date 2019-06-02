<?php
//Conexão
include_once '../Model/db_connect.php';
//Header
include_once '../Includes/header.php';
//Mensagem
include_once '../Includes/mensagem.php';
?>

<div class="fixed-action-btn horizontal">
<a href="#inserirProduto" class="btn-floating btn-large red modal-trigger"><i class="large material-icons">add</i></a>
</div>

<!-- Modal Alterar Preço -->
<div id="inserirProduto" class="modal">
  <div class="modal-content">
    <h4 class="light center">Cadastrar Produto</h4>
    <div class="row">
      <form class="col s12" action="" method="POST">
        <div class="row">
          <div class="input-field col s12 m6">
            <input type="text" id="nome" name="nome">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s12 m6">
            <select>
              <option value="" disabled selected>Escolha o tipo de produto</option>
              <?php
              $sql = "SELECT * FROM categoria";
              $resultado = mysqli_query($connect, $sql);
              while ($categoria = mysqli_fetch_assoc($resultado)) {
                ?>
              <option value="<?php echo $categoria['idCategoria'] ?>"><?php echo $categoria['descricao'] ?></option>
                <?php }; ?>
            </select>
            <label>Categoria</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" id="preco" name="preco">
            <label for="preco">Preço</label>
          </div>
          <div class="input-field col s12 m6">
            <input type="text" id="marca" name="marca">
            <label for="marca">Marca</label>
          </div>
        </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn-flat blue-text" name="btn-inserirProduto">Atualizar</button>
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
  </div>
  </form>
</div>



<!-- TABELA DE DÍVIDAS -->
<br>
<div class="row">
  <div class="col s12 m10 push-m1">
    <h4 class="light center blue-text">Produtos Cadastrados</h4>
    <table class="centered z-depth-2 white">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Categoria</th>
          <th>Preço</th>
          <th>Marca</th>
        </tr>
      </thead>

      <tbody class="">
        <?php
        $sql = "SELECT * FROM produtos";
        $resultado = mysqli_query($connect, $sql);

        while($dados = mysqli_fetch_array($resultado)):
         ?>
        <tr>
          <td> <?php echo $dados['nome'] ?> </td>
          <?php
             $categoriaFK = $dados['categoria'];
             $sql3 = "SELECT * FROM categoria WHERE idCategoria = '$categoriaFK'";
             $resultado3 = mysqli_query($connect, $sql3);
             while($dados3 = mysqli_fetch_array($resultado3)):
           ?>
         <td> <?php echo $dados3['descricao'] ?> </td>
       <?php endwhile; ?>
          <td> R$ <?php echo $dados['preco'] ?> <a href="#modal<?php echo $dados['idProduto'] ?>" class="green-text modal-trigger"><i class="tiny material-icons">edit</i></a> </td>
          <td> <?php echo $dados['marca'] ?> </td>
        </tr>

        <!-- Modal Alterar Preço -->
        <div id="modal<?php echo $dados['idProduto'] ?>" class="modal">
          <div class="modal-content">
            <h4 class="light center">Atualizar Preço</h4>
            <div class="row">
              <form class="col s12" action="../Controller/atualizarPreco.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['idProduto']; ?>">
                <div class="row">
                  <div class="input-field col s12">
                    <input type="text" id="preco" name="preco" value="<?php echo $dados['preco'] ?>">
                    <label for="preco">Preço</label>
                  </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn-flat blue-text" name="btn-atualizar">Atualizar</button>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
          </div>
          </form>
        </div>
      <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</div>




<?php
//Footer
  include_once '../Includes/footer.php';
?>
