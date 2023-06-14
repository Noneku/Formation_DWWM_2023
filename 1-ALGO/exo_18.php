<?php 

// Faire un algo qui demande l'âge d'un enfant et l'informe de sa catégorie 

// Déclaration :
$age = readline("Indiquez l'âge de l'enfant : ");


// Instruction :

    if ($age<6) {
        echo "Veuillez saisir un âge à partir de 6 ans.";
    }
    elseif ($age==6 || $age<=7) {
        echo "Votre enfant est dans la catégorie 'Poussin'";
    }
    elseif ($age==8 || $age<=9) {
        echo "Votre enfant est dans la catégorie 'Pupille'";
    }
    elseif ($age==10 || $age<=11) {
        echo "Votre enfant est dans la catégorie 'Minime'";
    }
    elseif($age==12 || $age<=17) {
        echo "Votre enfant est dans la catégorie 'Cadet'";
    }
    else {
        echo "Votre enfant n'est plus un enfant !";
    }


?>