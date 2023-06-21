<?php


$age = readline("Saisissez votre âge: ");
$sexe = readline("Saisissez votre sex (1 si Homme ou 2 si Femme): ");



// Instruction if en fonction du sexe de la personne 

if (($sexe == 1 && $age >= 20) || ($sexe == 2 && ($age >= 18 && $age <= 35))) {
      echo "Vous devez payer  des impôts";
    }
        else 
            {echo "Vous ne devez pas payer d'impôts";}


?>