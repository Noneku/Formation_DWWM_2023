<?php
// Ecrivez un algorithme permettant à l'utilisateur de saisir un nombre quelconque de valeurs, qui devront être stockés dans un tableau. L'utilisateur doit donc commencer par entrer le nombre de valeurs qu'il compte saisir. Il effectuera ensuite cette saisie. Enfin, une fois la saisie terminée, le programme affichera le nombre de valeurs positives. 

// Variables
$nbValeursPositives = 0;
$nbValeursNegatives = 0;

// Demande à l'utilisateur de saisir le nombre de valeurs
$numValeurs = readline("Combien de valeurs souhaitez-vous saisir ? ");

// Crée un tableau pour stocker les valeurs saisies
$valeurs = [];

// Saisie des valeurs
for ($i = 1; $i <= $numValeurs; $i++) {
    $valeurs[$i]= readline("Entrer un nombre: ");

    if ($valeurs[$i] > 0) {      
    $nbValeursPositives++;
}

else{
    $nbValeursNegatives++;
}

}

// Affiche le nombre de valeurs positives
echo "Le nombre de valeurs positives est : $nbValeursPositives\n";
echo "Le nombre de valeurs négatives est : $nbValeursNegatives\n";

?>