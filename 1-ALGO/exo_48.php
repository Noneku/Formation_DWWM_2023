<?php
// Soit T un tableau N entiers. Ecrire l'algorithme qui détermine le plus grand élément de ce tableau. 

// Déclaration variable
$tabT = [1,8,9,6,2,7];
$plusGrand = 0;

// Boucle for pour definir l'élément le plus grand de tabT
for ($i=0;$i<count($tabT);$i++){
    if ($tabT[$i] > $plusGrand){
        $plusGrand = $tabT[$i];
    }
}

// Affichage
print_r($plusGrand);

?>