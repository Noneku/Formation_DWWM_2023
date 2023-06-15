<?php

include('./employe.class.php');

$emp1 = new Employe("AA23","GaCem", "NaSSim", "31/07/1996", "23/01/2020", 1600);

$anciennete = $emp1->anciennete();

echo($emp1->augmentationDuSalaire($anciennete));
echo($emp1->getSalaire());
echo($emp1->afficherEmploye());

?>