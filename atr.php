<?php
include("conexao.php");
$sql1="SELECT * FROM jogadores";
$result=$mysqli->query($sql1);
$sql2="SELECT * FROM times";
$result2=$mysqli->query($sql2);
?>
<div>
<style type="text/css">
        thead{color:#ffff;background-color:rgb(250, 4, 4);}
        tbody{color:#000;background-color:rgb(252, 252, 252);}
        table,th,td{border:1px solid #000;}
        

    </style>
    <table class="table" width="40%"  style="text-align: center;">
     <thead>
      <tr>
      <th scope='col'>ATR</th>
       </tr>
 <table class="table" width="40%"  style="text-align: center;">
     <thead>
      <tr>
         <th scope='col'>Nome</th>
         <th scope='col'>Posição</th>
         <th scope='col'>Idade</th>
         
      </tr>
     </thead>
    <tbody>
        <?php
          while($user_data=mysqli_fetch_assoc($result)){
            if ($user_data['jogador_time']== "ATR"){
            echo "<tr>";
            echo "<td>".$user_data['nome']."</td>";
            echo "<td>".$user_data['posicao']."</td>";
            echo "<td>".$user_data['idade']."</td>";
           
            echo "</tr>";
          }
        }
        ?>
     
       
    </tbody>
    </table>
    <br>
    <table class="table" width="40%"  style="text-align: center;">
     <thead>
      <tr>
         <th scope='col'>Tecnico</th>
      </tr>
     </thead>
    <tbody>
        <?php
          while($user_data2=mysqli_fetch_assoc($result2)){
            if ($user_data2['nome']== "ATR" && $user_data2['categoria']=='profissional'){
            echo "<tr>";
            echo "<td>".$user_data2['tecnico']."</td>";
           
            echo "</tr>";
          }
        }
        ?>
     
       
    </tbody>
    </table>