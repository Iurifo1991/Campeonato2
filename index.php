<?php

include "especialista.php";

include "hospital.php";

$doutor= new Especialista("Iuri",1,"Cardiologista",10000);
$doutor->Opera("Angioplastia",10000);
$doutor2 = new Especialista("Iago",2,"Ortopedista",5000);
$doutor2->Opera("Artroscopia",5000);
$hospital = new Hospital("Albert Sabin","Juiz de Fora");
$hospital->addMedico("Jorge", 1);
echo $hospital->medicos;
?>
