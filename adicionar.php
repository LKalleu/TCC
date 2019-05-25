<?php
//Header
  include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light center">Novo Cliente</h3>
    <form class="" action="index.html" method="post">
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
        <input type="text" name="contato" id="contato" value="">
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
        <input type="text" name="cep" id="cep" value="">
        <label for="cep">Cep</label>
      </div>
      <div class="input-field col s12">
        <select multiple>
          <option value="" disabled selected>Escolha os produtos</option>
          <option value="1">Option 1</option>
          <option value="2">Option 2</option>
          <option value="3">Option 3</option>
        </select>
        <label>Produtos Comprados</label>
      </div>

      <button type="submit" class="btn" name="button">Cadastrar</button>
    </form>
  </div>
</div>

<?php
//Footer
  include_once 'includes/footer.php';
?>

<script type="text/javascript">
$(document).ready(function() {
  $('select').material_select();
});
</script>
