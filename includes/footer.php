    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
      $('.modal').modal();
    });
    $(".dropdown-button").dropdown();

    $(document).ready(function(){
      var $contato = $("#contato");
      $contato.mask('(00) 0 0000-0000');
    });

    $(document).ready(function(){
      var $cpf = $("#cpf");
      $cpf.mask('000.000.000-00');
    });

    $(document).ready(function() {
      $('select').material_select();
    });

    $(document).ready(function(){
      var $cep = $("#cep");
      $cep.mask('00000-000');
    });

    $(document).ready(function(){
      var $pesquisa = $("#pesquisa");
      $pesquisa.mask('00/00/0000');
    });

    $(document).ready(function(){
      var $preco = $("#preco");
      $preco.mask('#.##0,00', {reverse: true});
    });

    $(document).ready(function() {
      $('input#input_text, textarea#textarea1').characterCounter();
    });
    </script>
  </body>
</html>
