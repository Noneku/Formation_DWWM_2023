<?php

/*déclaration*/;

echo "Saisir l'âge de votre enfant : ";
$nb1 = trim(fgets(STDIN));



//calcul 

if ($nb1>=6 && $nb1<=7) {
    echo "Sa catégorie est poussin";
 }
 elseif($nb1>=8 && $nb1<=9){
    echo "Sa catégorie est Pupille";
 }
 elseif($nb1>=9 && $nb1<=10){
    echo "Sa catégorie est Pupille";
 }
 elseif($nb1>=12){
    echo "Sa catégorie est Pupille";
 }
 ?>