<?php
//Conxão
include_once '../Model/db_connect.php';
//Header
include_once '../Includes/header.php';
//Select
if (isset($_GET['id'])) {
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql = "SELECT * FROM devedor WHERE id = '$id' ";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
}
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light center">Inserir Novos Itens</h3>
    <form class="" action="inserirComprados.php" method="POST">
      <div class="input-field col s12">
        <input type="text" placeholder="00/00/0000" name="data" id="data" value="">
        <label for="data">Data</label>
      </div>
      <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">

      <div class="">
        <?php
        $sqlProdutos = "SELECT * FROM produtos";
        $resultadoProdutos = mysqli_query($connect, $sqlProdutos);
        while ($produtos = mysqli_fetch_assoc($resultadoProdutos)) {
          ?>
          <input type="checkbox" name="produtos" id="<?php echo $produtos['idProduto'] ?>" value=" <?php echo $produtos['idProduto'] ?> ">
          <label for="<?php echo $produtos['idProduto'] ?>"><?php echo $produtos['nome'] ?></label>
        <?php }; ?>
     </div>
      <div class="input-field col s12">
        <input type="text" name="quantidade" id="quantidade" value="">
        <label for="quantidade">Quantidade</label>
      </div>
      <button type="submit" class="btn blue" name="btn-inserirComprados">Cadastrar</button>
      <a href="../View/devedores.php" class="btn green" name="">Lista de Clientes</a>
    </form>
  </div>
</div>

<?php
//Footer
  include_once '../Includes/footer.php';
?>
