<?php
include "Employé.class.php";

$employe = new Employe("11111", "Girard", "Fabien", "04/10/1984", "05/06/2014", 3250);
$employe->afficherEmploye();

$employe->augmentationDuSalaire();
echo "##################################\n";
echo " Aprés application de l'augmentation de salaire\n";
echo "##################################\n";
$employe->afficherEmploye();
?>