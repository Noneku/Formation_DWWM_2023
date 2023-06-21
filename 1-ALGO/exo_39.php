<?php
    // Nombre de notes à entrer
    $nombreNotes = readline("Combien de notes voulez-vous entrer ? ");
    $notes = array();  
    $somme = 0;  

    // Boucle for
    for ($i = 0; $i < $nombreNotes; $i++) {
        $note = readline("Entrez la note numéro " . ($i+1) . ": ");
        $notes[] = $note;
        $somme += $note;  
    }

    // Calcul de la moyenne
    $moyenne = $somme / $nombreNotes;

    // Compter le nombre de notes supérieures à la moyenne
    $nombreSupMoyenne = 0;
    for ($i = 0; $i < $nombreNotes; $i++) {
        if ($notes[$i] > $moyenne) {
            $nombreSupMoyenne++;
        }
    }

    // Affichage du nombre de notes supérieures à la moyenne
    echo "La moyenne de la classe est de : " .$moyenne;
    echo "\n";
    echo "Le nombre de notes supérieures à la moyenne est : " . $nombreSupMoyenne;
?>
