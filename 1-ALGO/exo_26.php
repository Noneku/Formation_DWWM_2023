<?php
// Variables du calcul
$a = readline("Entrée un nombre : " );
$b = readline("Entrée un nombre : ");
$c = readline("Entrée un nombre : ");
$r = $b*$b - 4* $a*$c;

// Affichage
echo"Le delta de l'équation est : " .$r;

// Si delta est inférieur
if ($r<0) {
    echo " Il n'y a pas de Solution";
} 
// Si delta est égal à 0
elseif ($r = 0) {
    echo " Il n'y a qu'une seule solution à l'équation : c'est x = -b/(2a)";
}
// Si delta est supérieur à 0
elseif ($r > 0) {
    echo " Il y a deux solutions qui sont x1 = (-b-√Δ)/(2a) et x2= (-b+√Δ)/(2a)";
    
}

?>