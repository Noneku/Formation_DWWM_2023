<?php

include "livre.class.php";

$titre = "albert" ;
$auteur = "robert" ;
$prix = 15 ;


$l = new Livre("albert", "robert" , 15);
//$livre->afficher() ;

print_r($l);


?>