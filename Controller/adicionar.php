<?php
//Header
  include_once '../Includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light center">Novo Cliente</h3>
    <form class="" action="create.php" method="POST">
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome" value="">
        <label for="nome">Nome</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="email" id="email" value="">
        <label for="email">Email</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="senha" id="senha" value="">
        <label for="senha">Senha</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="contato" id="contato" value=""  maxlength="16">
        <label for="contato">Contato</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="rua" id="rua" value="">
        <label for="rua">Rua</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="bairro" id="bairro" value="">
        <label for="bairro">Bairro</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="numeracao" id="numeracao" value="">
        <label for="numeracao">Numeração</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="cep" id="cep" value=""  maxlength="9">
        <label for="cep">Cep</label>
      </div>

      <button type="submit" class="btn blue" name="btn-cadastrar">Cadastrar</button>
      <a href="../View/devedores.php" class="btn green" name="">Lista de Clientes</a>
    </form>
  </div>
</div>

<?php
//Footer
  include_once '../Includes/footer.php';
?>
