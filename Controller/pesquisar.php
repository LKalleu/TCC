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
       <form method="POST" action="pesquisar.php">
         <div class="input-field">
           <input id="pesquisar" type="search" required class="indigo darken-3 white-text" name="pesquisar" placeholder="Digite uma data, ex: 00/00/000">
           <label class="label-icon" for="pesquisar"><i class="material-icons">search</i></label>
           <i class="material-icons">close</i>
         </div>
       </form>
     </div>
   </nav>
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
         $pesquisar = $_POST['pesquisar'];
         $resultados = "SELECT * FROM historico WHERE data LIKE '%$pesquisar%' LIMIT 5";
         $resul = mysqli_query($connect, $resultados);

         while ($rows = mysqli_fetch_array($resul)) {
          ?>

         <tr>
          <td><?php echo $rows['data']; ?></td>
          <td><?php echo $rows['produto']; ?></td>
          <?php
             $fornecedorFK = $rows['fornecedor'];
             $sql3 = "SELECT * FROM fornecedor WHERE idFornecedor = '$fornecedorFK'";
             $resultado3 = mysqli_query($connect, $sql3);
             while($dados3 = mysqli_fetch_array($resultado3)):
           ?>
         <td> <?php echo $dados3['nome'] ?> </td>
       <?php endwhile; ?>
          <td><?php echo $rows['quantidade']; ?></td>
         </tr>
         <?php   } ?>
       </tbody>
     </table>
   </div>
 </div>

 <?php
 //Footer
   include_once '../Includes/footer.php';
 ?>
