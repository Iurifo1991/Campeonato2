<?php
include("conexao.php");
$sql1="SELECT * FROM jogadores";
$result=$mysqli->query($sql1);
$sql2="SELECT * FROM times";
$result2=$mysqli->query($sql2);
?>
<div>
<style type="text/css">
        thead{color:#ffff;background-color:rgb(14, 14, 13);}
        tbody{color:#000;background-color:rgba(224, 224, 224, 1);}
        table,th,td{border:1px solid #001;}
        

    </style>
    <table class="table" width="40%"  style="text-align: center;">
     <thead>
      <tr>
      <th scope='col'>CLASSIFICAÇÃO</th>
       </tr>
 <table class="table" width="40%"  style="text-align: center;">
     <thead>
     
      <tr>
         <th scope='col'>Nome</th>
         <th scope='col'>Pontos</th>
        
         
      </tr>
     </thead>
    <tbody>
        <?php
          $sql="SELECT * FROM times ORDER BY pontos  DESC";
          $result3=$mysqli->query($sql);
          while($user_data=mysqli_fetch_assoc($result3)){
            echo "<tr>";
            echo "<td>".$user_data['nome']."</td>";
            echo "<td>".$user_data['pontos']."</td>";
            
         
            echo "</tr>";
          }
        
        ?>
     
       
    </tbody>
    </table>