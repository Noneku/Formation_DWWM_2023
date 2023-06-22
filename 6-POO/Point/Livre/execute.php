<?php
include "livre.php";

$titre = readline("donner le titre ");
$auteur =  readline("donner l'auteur ");
$prix = readline("donner le prix ");

$livre = new Livre("Programmer en C", "Claude Delannoy", 350);
$livre->afficherlivre();



?>