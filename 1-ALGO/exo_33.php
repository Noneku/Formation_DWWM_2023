<?php
    // Variables
    echo "Combien de nombres voulez-vous saisir ? ";
    $nbNotes = trim(fgets(STDIN));

    $notes = array();  
    $nbPositifs = 0;  
    $nbNegatifs = 0;  

    // Boucle for
    for ($i = 0; $i < $nbNotes; $i++) {
        echo "Veuillez entrer le nombre numéro " . ($i+1) . ": ";
        $nombre = trim(fgets(STDIN));
        $notes[] = $nombre;
        
    //Conditions    
        if ($nombre > 0) {
            $nbPositifs++;
        } else {
            $nbNegatifs++;
        }
    }

    // Affichage du nombre de valeurs positives et négatives
    echo "Nombre de valeurs positives : " . $nbPositifs . "\n";
    echo "Nombre de valeurs négatives : " . $nbNegatifs . "\n";
?>
