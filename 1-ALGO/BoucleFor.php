<?php

// Affiche les dix nombres suivants

// INSTRUCTION : 
// 1- condition initiale 
// 2- condition nécéssaire
// 3- opération à effectuer 
for ($i = 1; $i <= 10; $i++ ) {

    echo $i; 
    echo "\n";
    //  va afficher 10fois $i en ajoutant +1 grace à la metthode $i++ , cela va donc afficher : " 12345678910 "

}



// EXERCICE 20 EXPLICATION
// ___________________________________________________________________________________________________________________________________________


echo "\n";
$nb = readline("Entrez un nombre : ");
// si je rentre le numéro 5 

$somme = 0;

// Instruction
for ($i = 1; $i <= $nb; $i++) {

echo $i;
echo "\n";
// Le echo $i va afficher " 1,2,3,4,5" car $i =1 et est inférieur à $nb qui est de 5 (valeur entrée dans le terminal)
// le $i++ va incrémenter +1 et faire une boucle 

echo $somme = $somme + $i;
echo "\n";

// la variable $somme de base étant 0, on va additionner la somme avec la boucle, 5fois (car boucle X5)
/* cela affichera/calculera

0 + 1= 1
1 (recupération du resultat précédent dans la variable $somme) + 2 = 3
3 + 3 = 6
6 + 4 = 10
10 + 5 = 15

Le résultat est donc 15

*/

}

// Affichage
echo "\n";
echo "La somme de $nb est : $somme";


// ___________________________________________________________________________________________________________________________________________


$tableau = array ( 1, 2, 3);
$tableau2 = array ();

for ($i = 0  ; $i < count($tableau); $i++){

    echo $tableau2[$i] = $tableau[$i];
}

print_r($tableau2);

?>