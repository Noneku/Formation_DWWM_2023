<?php

// <!-- Ecrire un algorithme qui demande un nombre de départ,et qui ensuite affiche les dix nombres suivants. Par exemple, si l'utilisateur entre le nombre 17, le programme affichera les nombres de 18 à 27.  -->


// Demande à l'utilisateur d'entrer un nombre de départ
$nombreDepart = readline("Entrez un nombre de départ");

// Affiche les dix nombres suivants
for ($i = $nombreDepart + 1; $i <= $nombreDepart + 10; $i++) 
{
    echo $i ." ";
}

?>