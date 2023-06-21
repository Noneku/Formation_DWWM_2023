<?php
// Ecrire l'algorithme qui permet de donner le résultat d'un étudiant à un module sachant que ce module est sanctionné par une note d'oral de coefficient 1 et une note d'écrit de coefficient 2. La moyenne obtenue doit être supérieure ou égale à 10 pour valider me module. 

// Variables notes d'oral et d'écrit
$noteOral = readline("entrer note: ");
$noteEcrit = readline("entre note: ");

// Coefficients
$coefOral = 1;
$coefEcrit = 2;

// Calcul de la moyenne
$moyenne = ($noteOral * $coefOral + $noteEcrit * $coefEcrit) / ($coefOral + $coefEcrit);
echo $moyenne . "\n";

// Vérification du résultat du module
if ($moyenne >= 10) {
    echo "Module validé";
} 

else {
    echo "Module non validé";
}

?>