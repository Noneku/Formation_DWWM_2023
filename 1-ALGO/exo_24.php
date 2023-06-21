<?php
// Variables pour demander les info à l'utilisateur
$age = readline("Quel est vôtre age ? ");
$sexe = readline("Quel est vôtre sexe ? ");

// Si c'est un Homme de plus de 20 ans 
if ($age > 20 and $sexe == "homme") {
    echo "Il payera des impots";

    // Si c'est une femme entre 18 et 35 ans
    
   }
    elseif (($age > 18 and $age <= 35) and $sexe == "femme") {
        echo "Elle payera des impots";
    }
    else {
    echo "Ne payera pas d'impots";
    }

?>