<?php
// / * ecrire un algo qui declare et remplisse un tableau de 9 notes
// contenant les 6voyelles de l'alphabet 
$notes = array();

for ($i=0; $i < 9; $i++) { 

    $notes[$i]=readline("donner un nombre : ");

    echo $notes[$i]."\n";
    
}
//print_r($notes);
?>