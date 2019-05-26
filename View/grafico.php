<?php
//Conexão
include_once '../Model/db_connect.php';
//Header
include_once '../Includes/header.php';
//Mensagem
include_once '../Includes/mensagem.php';
?>

<h4 class="light center indigo-text">Total de Produtos Adquiridos: <?php $sqq = "SELECT SUM(quantidade) AS total FROM historico"; $query = mysqli_query($connect,$sqq); while($a = mysqli_fetch_array($query)){ echo $a['total']; } ?> </h4>
<?php
  $sql = "SELECT * FROM historico";
  $resultado = mysqli_query($connect, $sql);

 ?>

<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      <?php
      while ($dados = mysqli_fetch_array($resultado)) :
        $fornecedorFK = $dados['fornecedor'];
        $sql2 = "SELECT * FROM fornecedor WHERE idFornecedor = '$fornecedorFK'";
        $resultado2 = mysqli_query($connect, $sql2);
        while ($dados2 = mysqli_fetch_array($resultado2)):
      ?>
      ['<?php echo $dados2['nome']; endwhile; ?>', <?php echo $dados['quantidade']; ?>],
      <?php  endwhile; ?>
    ]);

    var options = {
      title: ''
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>
<br>
<div id="piechart" class="center z-depth-5" style="width: 70%; height: 500px; margin-left: 15%"></div>

<?php
//Footer
  include_once '../Includes/footer.php';
?>
