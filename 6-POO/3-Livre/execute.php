<?php
include "livre.class.php";



$auteur = "Albert Camus";
$titre = "L'Etranger";
$prix = 3;


$livre1 = new Livre($titre , $auteur, $prix);
$livre1 -> afficher();




$auteur = "Laurent Gounelle";
$titre = "L'homme qui voulait être heureux";
$prix = 7;


$livre2 = new Livre($titre , $auteur, $prix);
$livre2 -> afficher();





?>