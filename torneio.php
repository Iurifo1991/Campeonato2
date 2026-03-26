<?php

 include("conexao.php");

$sql1="SELECT * FROM times";
$result=$mysqli->query($sql1);
?>
<div>
    <style type="text/css">
        thead{color:#000;background-color: #aaa;}
        tbody{color:#000;background-color: #eee;}
        table,th,td{border:1px solid #000;}
        

    </style>
  <table class="table" width="40%"  style="text-align: center;">
     <thead>
      <tr>
         <th scope='col'>Nome</th>
         <th scope='col'>Tecnico</th>
         <th scope='col'>Bairro</th>
         <th scope='col'>Categoria</th>
      </tr>
     </thead>
    <tbody>
        <?php
          while($user_data=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td><a href='http://localhost/aula/teste/".strtolower($user_data['nome']).".php'
        target='_blank'>".$user_data['nome']."</a>
      </td>";
            echo "<td>".$user_data['tecnico']."</td>";
            echo "<td>".$user_data['bairro']."</td>";
            echo "<td>".$user_data['categoria']."</td>";
            echo "</tr>";
          }
        ?>
         <!-- while($user_data=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$user_data['nome']."</td>";
            echo "<td>".$user_data['tecnico']."</td>";
            echo "<td>".$user_data['bairro']."</td>";
            echo "<td>".$user_data['categoria']."</td>";
            echo "</tr>";
          }
        ?>
     
        -->
     
       
    </tbody>
    </table>
    
    <body>
       
      
       <a  href="http://localhost/aula/teste/grafico2.php"
        target="_blank">Gráfico</a>
      
       </a>

