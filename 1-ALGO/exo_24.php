<?php
//Declaration

$sexe = readline("Quel est votre sexe? 1 pour un homme, 0 pour une femme: ");

$age = readline("Quel est votre âge ? : ");


//Instruction

if($sexe = 1 && $age >= 20){
    //affichage
    echo "Vous êtes un homme et vous payaient des impots";

}elseif($sexe = 0 && $age >=18 and $age <=35){
    //affichage
    echo"Vousêtes un femme et vous êtes imposables";

}else{
    //affichage
    echo"Vous n'etes pas imposable";
}


?>