<?php
//Sessão
session_start();
if (isset($_SESSION['mensagem'])) { ?>

<script type="text/javascript">
  //Mensagem
  window.onload = function() {
    Materialize.toast('<?php   echo $_SESSION['mensagem']; ?>');
  };
</script>
<?php
  session_unset();
 ?>
<?php } ?>
