<?php

include_once "personne.class.php";
include_once "employe.class.php";
include_once "etudiant.class.php";
include_once "professeur.class.php";

$moi0 = new Personne(1,"Dupont","Jean");
$moi = new Etudiant(1,"Dupont","Jean",0235);
$moi3 = new Employe(1,"Dupont","Jean",1250);
$moi2 = new Professeur(1,"Dupont","Jean",1000,"Mathematique");

echo $moi0."\n";
echo $moi."\n";
echo $moi2."\n";
echo $moi3."\n";