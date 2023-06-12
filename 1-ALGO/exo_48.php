<?php
$tabT = array();
$i=0;
$max=0;
do{
    
    $accord=readline("voulez vous entrez un nouveau chiffre(o/n) ");
    $tabT[$i]=readline("entrez un chiffre: ");
    $i++;

}while ($accord <>"n");
for ($i=0; $i <count($tabT); $i++) { //parcours le tableau 

    if($max<$tabT[$i]){

        $max=$tabT[$i];

        
    }

    }
    print_r($tabT);
    echo "la valeur ".$max;
?>