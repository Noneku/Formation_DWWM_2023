<?php
    // Demande l'âge de l'enfant à l'utilisateur
    echo "Veuillez entrer l'âge de l'enfant : ";
    $age = trim(fgets(STDIN));

    // Informe l'utilisateur de la catégorie de l'enfant
    if ($age >= 6 && $age <= 7) {
        echo "L'enfant est dans la catégorie 'Poussin'.";
    } else if ($age >= 8 && $age <= 9) {
        echo "L'enfant est dans la catégorie 'Pupille'.";
    } else if ($age >= 10 && $age <= 11) {
        echo "L'enfant est dans la catégorie 'Minime'.";
    } else if ($age >= 12) {
        echo "L'enfant est dans la catégorie 'Cadet'.";
    } else {
        echo "L'enfant ne correspond à aucune catégorie.";
    }
?>