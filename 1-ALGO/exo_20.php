//écrire un algorithme qui demande un nombre de départ, et qui calcule la somme des entier jusqu'a ce
nombre. par exemple si l'on entre 5, le programme doit calculer :1+2+3+4+5=15.

<?php
 $som=0;
 $nombre=0;
 $i=0;
//

 echo "Entrez un nombre: ";
 $nombre = intval(fgets(STDIN));
 
 for($i = 1 ; $i <= $nombre; $i++ ){
$som = $som + $i;
 }

echo "la somme est :".$som;

?>