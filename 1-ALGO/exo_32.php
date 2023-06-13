<?php
/*Ecrire un algo qui déclare un tableau de 9 notes, dont on fait ensuite saisir les valeurs par l'utlisateur*/ 

$tab = array("","","","","","","","","");

for ($i = 0 ; $i<count($tab); $i++){
    $nb = readline("Saisir un nombre : ");
    $tab[$i] = $nb;
}
print_r($tab);

?>