<?php
 
 //r_dump($_POST);

include("conexao.php");

$nome=$_POST["nome"];
$tecnico=$_POST["tecnico"];
$bairro=$_POST["bairro"];
$categoria= $_POST["categoria"];

$sql="INSERT INTO times(nome, tecnico, bairro ,categoria) VALUES ('$nome', '$tecnico','$bairro','$categoria')";
if(mysqli_query($mysqli,$sql)){
    echo "Time cadastrado com sucesso";
}
else{
    echo "Erro";
}

$sql1="SELECT * FROM times";
$result=$mysqli->query($sql1);
?>
<div>
  <table class="table">
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
            echo "<td>".$user_data['nome']."</td>";
            echo "<td>".$user_data['tecnico']."</td>";
            echo "<td>".$user_data['bairro']."</td>";
            echo "<td>".$user_data['categoria']."</td>";
            echo "</tr>";
          }
        ?>
        <body>
        <a  href="http://localhost/aula/teste/torneio.php">
        </a>
        </body>
     
    </tbody>
    </table>
</div>
mysqli_close($mysqli);
