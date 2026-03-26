<?php

include("conexao.php");
echo "Jogo 3 - ADF 7 X 2 BARÃO";
echo "<br>";
echo "Gols";
echo "<br>";
echo "Arthur 3";
echo "<br>";
echo "Andre Branco 2";
echo "<br>";
echo "Jailson 2";
echo "<br>";
echo "Belego 2";
$sql1="SELECT * FROM jogadores";
$y="SELECT * FROM  times";
$point="UPDATE  times SET pontos=3 WHERE nome= 'ADF'";
$res3=mysqli_query($mysqli,$point);
$result=$mysqli->query($sql1);
$sql="UPDATE jogadores SET Gol=3 WHERE nome='Arthur'";
$res=mysqli_query($mysqli,$sql);
$sql4="UPDATE jogadores SET Gol=2 WHERE nome='Andre Branco'";
$res1=mysqli_query($mysqli,$sql4);
$sql5="UPDATE jogadores SET Gol=2 WHERE nome='Jailson'";
$res5=mysqli_query($mysqli,$sql5);
$sql6="UPDATE jogadores SET Gol=2 WHERE nome='Belego'";
$res6=mysqli_query($mysqli,$sql6);