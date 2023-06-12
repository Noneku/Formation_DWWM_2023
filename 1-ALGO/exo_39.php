<?php
    //Varaibles
    $noteArray = [];
    $betterNote = [];
    $sum = 0;
    $moyenne = 0;
    //Traitement
    for ($i=0; $i < 5; $i++) { 
        //Ask 5 times, to enter value by User
        $note = readline("Entrer les notes : ");
        //Insert note of user in $noteArray
        $noteArray[$i] = $note;
        //Calcul moyen first time take a sum of values
        $sum += $noteArray[$i];
        //Get moyen
        $moyenne = $sum / count($noteArray);
        //Check if note in noteArray are better, if True insert in $betterNote Array
        if($noteArray[$i] > $moyenne){
            $betterNote[$i] = $noteArray[$i];
        }
    }

    echo "La moyenne de la classe est de : ".$moyenne."\n";
    echo "Les meilleurs notes sont : "."\n";
    print_r($betterNote);
?>