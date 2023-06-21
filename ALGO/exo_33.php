<?php
//Ecrivez un algorithme permettant à l'utilisateur de saisir un nombre quelconque de valeurs, qui devront être stockés dans un
//tableau. L'utilisateur doit donc commencer par entrer le nombre de valeurs qu'il compte saisir. Il effectuera ensuite cette saisie. Enfin,
//une fois la saisie terminée, le programme affichera me nombre de vameur négatives et le nombre de valeurs positives.

$nbValeurs = readline("Combien de valeurs?");

//creation de tableau.
$tab=array();

//creation de variable
$positif = 0;
$négatif = 0;

$valeur = readline("entrer le nombre:");

//"$i < $valeur " permet de demander combien de valeur à afficher.
for ($i=0; $i < $valeur; $i++) {                   
    $tab [$i] = readline("entrer le nombre:"); //-> permet de mettre la valeur demandé .               
}

if ($tab[$i] < 0) {
    $négatif ++;
}

 else { 
        $positif++;
    }
    //affichage
    echo " il ya". $négatif."nombre négatif et". $positif." nombre positif \n" ;



    ?>


