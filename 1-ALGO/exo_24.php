<?php 
// Les habitants de paris paient l'impôt selon les règles suivantes: 
// - les hommes de plus de 20 ans paient l'impôt 
// - les femmes paient l'impôt si elles ont entre 18 et 35 ans 
// - les autres ne paient pas d'impôt 

// Le programme demandera donc l'âge et le sexe duparisien, et se prononcera donc ensuite sur le fait que l'habitant est imposable. 

//Variables
$age = readline("Quel est votre âge ? ");

$sexe = readline("Quel est votre sexe (M pour homme, F pour femme) ? ");

$imposable = false;
// Hommes plus de 20 ans paient des impôts
if ($sexe == "M" && $age > 20) {  
$imposable = true;
} 
// femmes entre 18 et 35 ans paient des impôts
elseif ($sexe == "F" && $age >= 18 && $age <= 35) {     
$imposable = true;
}
// conditions 
if ($imposable) {
echo "Vous êtes imposable.";
} 

else {  
echo "Vous n'êtes pas imposable.";
}

?>