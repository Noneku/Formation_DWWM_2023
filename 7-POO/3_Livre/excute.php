<?php

include "livre.classe.php";

$Titre = "les mésirables";
$Auteur  ="Victor Hugo";
$Prix = 100;

$Livre = new Livre($Titre,$Auteur,$Prix);

$Livre->Afficher();





?>