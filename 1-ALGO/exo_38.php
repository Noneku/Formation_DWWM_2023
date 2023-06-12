<?php
$Valeurs = array();
$longueur=readline("donner la nombre de saisie : ");
$max=0;
$position=0;

for ($i=0; $i <$longueur; $i++) { //parcours le tableau 

    $Valeurs[$i]=readline("donner un nombre : ");

    }
    for ($i=0; $i <$longueur; $i++) { //parcours le tableau 

        if($max<$Valeurs[$i]){

            $max=$Valeurs[$i];
            $position=$i+1;
            
        }
    
        }
echo "la plus grande valeur du tableau est $max en position $position";






?>