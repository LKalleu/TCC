<?php
//Conxão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
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
    <h3 class="light center">Editar Cliente</h3>
    <form class="" action="php_action/update.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
        <label for="nome">Nome</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
        <label for="email">Email</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="senha" id="senha" value="<?php echo $dados['senha']; ?>">
        <label for="senha">Senha</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="contato" id="contato" value="<?php echo $dados['contato']; ?>">
        <label for="contato">Contato</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="rua" id="rua" value="<?php echo $dados['rua']; ?>">
        <label for="rua">Rua</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="bairro" id="bairro" value="<?php echo $dados['bairro']; ?>">
        <label for="bairro">Bairro</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="numeracao" id="numeracao" value="<?php echo $dados['numeracao']; ?>">
        <label for="numeracao">Numeração</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="cep" id="cep" value="<?php echo $dados['cep']; ?>">
        <label for="cep">Cep</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="prod_comprados" id="prod_comprados" value="<?php echo $dados['prod_comprados']; ?>">
        <label for="prod_comprados">prod_comprados</label>
      </div>

      <button type="submit" class="btn blue" name="btn-editar">Cadastrar</button>
      <a href="index.php" class="btn green" name="">Lista de Clientes</a>
    </form>
  </div>
</div>

<?php
//Footer
  include_once 'includes/footer.php';
?>
