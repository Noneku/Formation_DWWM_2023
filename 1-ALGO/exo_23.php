<?php

$nbr=0;
$pg=0;
$po=0;
$i=0;

do {
    
    $i++;
    $nbr = readline("entrer un nombre");

    if ($pg < $nbr)
     {
        $pg = $nbr;
        $po = $i;
      
    }
    
} 
while ($nbr <> 0);
echo "entrer un nombre ";

//Affichage du résultat

echo "Le plus grand nombre parmi ces nombres est : " . $pg ."\n";           
echo "Il a été saisi en position n° : " . $po;



?>