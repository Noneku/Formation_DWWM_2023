<?php 

// Ecrire un algo qui demande l'âge et le sexe d'une personne et l'informe si elle paie des impôts ou non 

// Déclaration :
$age = readline("Indiquez votre âge : ");
$sexe = readline("Spécifiez votre sexe (H/F) : ");

// Instructions :

if($age > 20 && $sexe == "H") {
    echo "Vous paierez des impôts.";
} 

elseif (($age>18 && $age<35) && $sexe == "F") {
    echo "Vous paierez des impôts.";
} 

else {
    echo "Vous ne paierez pas d'impôts ! ;)";
}



?>