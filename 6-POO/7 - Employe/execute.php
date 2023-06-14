<?php
include_once "employe.class.php";

$emp = new Employe(14500,"b2oba","yaffa","08/08/2002","04/05/2013",10000);

echo $emp->afficherEmploye();
echo $emp->augmentationDuSalaire();
echo $emp->afficherEmploye();
