<?php

include "livre.class.php";

$Titre = "Harry Potter";
$Auteur = "J.K Rowling";
$Prix = 20;

$livre = new Livre("Harry Potter", "J.K Rowling", 20);
$livre->afficher();
