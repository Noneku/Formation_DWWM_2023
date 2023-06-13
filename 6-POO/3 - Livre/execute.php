<?php
include "livre.class.php";
$titre = "Super Titre";
$auteur = "Auteur de fou";
$prix = 24;

$Livre = new Livre($titre,$auteur,$prix);
$Livre->afficher();