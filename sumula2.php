<?php

include("conexao.php");
echo "Jogo 2 - JK 1 X 2 CTS";
echo "<br>";
echo "Gols";
echo "<br>";
echo "Dodinho 1";
echo "<br>";
echo "Lazaro 2";
$sql1="SELECT * FROM jogadores";
$y="SELECT * FROM  times";
$point="UPDATE  times SET pontos=3 WHERE nome= 'CTS'";
$res3=mysqli_query($mysqli,$point);
$result=$mysqli->query($sql1);
$sql="UPDATE jogadores SET Gol=2 WHERE nome='Lazaro'";
$res=mysqli_query($mysqli,$sql);
$sql4="UPDATE jogadores SET Gol=1 WHERE nome='Dodinho'";
$res1=mysqli_query($mysqli,$sql4);
