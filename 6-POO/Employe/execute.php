<?php

include('./employe.class.php');

$emp1 = new Employe("AA23","Gacem", "Nassim", "31/07/1996", "23/01/2012", 1600);

$anciennete = $emp1->anciennete();

echo($emp1->augmentationDuSalaire($anciennete));
echo($emp1->getSalaire());
echo($emp1->afficherEmploye());

?>