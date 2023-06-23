<?php

include("etudiant.php");

$etudiant1 = new Etudiant ("Todoroki", "Shoto", "25478677");
echo $etudiant1->__toString();
echo "\n";
$etudiant2 = new Etudiant ("Jaeger", " Eren", "6565263");
echo $etudiant2->__toString();


?>