<?php
include_once "employe.class.php";

$emp = new Employe(14500,"Michael","Desanta","08/05/2002","04/05/2013",10000);

echo $emp->afficherEmploye();
echo $emp->augmentationDuSalaire()."\n";
echo $emp->afficherEmploye();
