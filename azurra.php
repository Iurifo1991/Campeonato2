<?php
include("conexao.php");
$sql1="SELECT * FROM jogadores";
$result=$mysqli->query($sql1);
$sql2="SELECT * FROM times";
$result2=$mysqli->query($sql2);
?>
<div>
<style type="text/css">
        thead{color:#ffff;background-color:rgb(7, 1, 97);}
        tbody{color:#ffff;background-color:rgb(21, 5, 252);}
        table,th,td{border:1px solid #001;}
        

    </style>
    <table class="table" width="40%"  style="text-align: center;">
     <thead>
      <tr>
      <th scope='col'>AZURRA</th>
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
            if ($user_data['jogador_time']== "Azurra"){
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
            if ($user_data2['nome']== "Azurra" && $user_data2['categoria']=='profissional'){
            echo "<tr>";
            echo "<td>".$user_data2['tecnico']."</td>";
           
            echo "</tr>";
          }
        }
        ?>
