<?php

// Ecrire un algorithme qui permet donner le résultat d'un étudiant à un module sachant que ce module est sanctionné par une note 
// d'oral de coefficient 1 et une note d'écrit de coefficient 2. La moyenne obtenue doit être supérieure ou égale à 10 pour valider le module.


$noteOral = readline("Entrer note oral ");
$noteEcrit = readline("Entrer note ecrit ");

echo "Moyenne:".($noteOral + $noteEcrit) / 3;

?>