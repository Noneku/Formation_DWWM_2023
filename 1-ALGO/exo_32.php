<?php
$note = array ("","","","","","","","","");


// boucle affiche rles nombre en tableau avec 9 ligne


for($i=0; $i < 9; $i++){
    echo "Saisir un nombre : ";
    $note[$i] = trim(fgets(STDIN));
   //  $note[$i] = $nb1;
}

print_r($note)
?>