<?php

include("conexao.php");
echo "Jogo 1 - ATR 3 X 4 BDC";
echo "<br>";
echo "Gols";
echo "<br>";
echo "João Vitor Ribas 2";
echo "<br>";
echo "Vitinho 2";
echo "<br>";
echo "João Caratiero 3";
$sql1="SELECT * FROM jogadores";
$y="SELECT * FROM  times";
$point="UPDATE  times SET pontos=3 WHERE nome= 'BDC'";
$res3=mysqli_query($mysqli,$point);
$result=$mysqli->query($sql1);
$sql="UPDATE jogadores SET Gol=2 WHERE nome='Vitinho'";
$res=mysqli_query($mysqli,$sql);
$sql4="UPDATE jogadores SET Gol=2 WHERE nome='João Vitor Ribas'";
$res1=mysqli_query($mysqli,$sql4);
$sql5="UPDATE jogadores SET Gol=3 WHERE nome='João Caratiero'";
$res2=mysqli_query($mysqli,$sql5);


             ;
            
            


        