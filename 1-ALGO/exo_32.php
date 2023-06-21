<?php
    // Déclaration d'un tableau vide pour stocker les notes
    $notes = array();

    // Boucle pour demander à l'utilisateur de saisir 9 notes
    for ($i = 0; $i < 9; $i++) {
        echo "Veuillez entrer la note numéro " . ($i+1) . ": ";
        $note = trim(fgets(STDIN));
        $notes[] = $note;
    }

    // Affichage du tableau des notes
    print_r($notes);
    
?>
