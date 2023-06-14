<?php

// Ecrire un algo qui permet de saisir des notes et d'indiquer le nombre de notes saisies qui sont supérieures à la moyenne 

// Déclaration : 
$nbNotes = readline("Indiquez le nombre de notes à entrer : ");
$notes = array();
$somme = 0;
$moy = 0;
$notesSup = 0;



// Instruction : 

for ($i =0; $i < $nbNotes; $i++) {
    $notes[$i] = readline("Entrez la note : ");
    $moy = ($somme += $notes[$i])/count($notes);

    if ($notes[$i] > $moy) {
        $notesSup++;
    }
}


// Affichage :
echo "La moyenne des notes saisies est : $moy. Il y a $notesSup note(s) supérieure(s) à la moyenne.";
?>