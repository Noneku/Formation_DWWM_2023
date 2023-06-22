<?php

$nbNote = readline("Indiquez un nombre de note ");

$tab1 = array();
$moyen = 0;
$som = 0;
$notSup = 0;


for ($i=0; $i < $nbNote; $i++) { 
    $tab1[$i] = readline("entrez les notes : ");
    $som += $tab1[$i];
}

$moyen = $som / $nbNote;

for ($i=0; $i <= $nbNote ; $i++) { 
   
    if ($tab1[$i] > $moyen) {
        $notSup += 1;

    }
}


echo "moyenne classe : ".$moyen."\n";
echo "les notes validées sont : ".$notSup;

?>