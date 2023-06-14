<?php 

include "rectangle.class.php";


$largeur = 15;
$longueur = 28;
$rec1 = new Rectangle ($largeur, $longueur);
$afficherRectangle = $rec1->afficherRectangle();


$largeur=5;
$longueur = 5;
$rec2 = new Rectangle ($largeur, $longueur);
$afficherRectangle = $rec2->afficherRectangle();

?>