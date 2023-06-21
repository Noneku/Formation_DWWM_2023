<?php
$nbn = readline("Saisissez le nombre de note ");
$tab1 = array ();
$i = 0;
$notesup = 0;
$total = 0;


//Saisir les notes
for ($i=0; $i < $nbn; $i++) { 
    $tab1[$i] = readline("Saisissez une note ");
    $total = $total + $tab1[$i];
}
print_r ($tab1);


// afficher si la note est au dessus de la moyenne ou non 
for ($i=0; $i < $nbn ; $i++) { 
    if ($tab1[$i] > ($total / $nbn)) {
        $notesup += 1;
    }
}

echo "il a ".$notesup." notes au-dessus de la moyenne de la classe";

?>