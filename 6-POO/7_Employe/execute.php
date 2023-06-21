<?php
include "employe.class.php";

// execution des fonctions inclus de la class Employe 
$employe = new Employe("00125", "Saintjean", "Karim", "26/06/1999", "18/12/2007", 1500);
$employe->augmentationDuSalaire();
$employe->afficherEmploye();
$employe->anciennete();
