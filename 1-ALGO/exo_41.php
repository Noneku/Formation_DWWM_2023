<?php
/* Ecrire un algo effectuant le décalage des éléments d'un tableau */

//Declaration
$tab = array("D","E","C","A","L","A","G","E");
$tabModif = array();
$stock = $tab[0];

//Instructions
//Commence i à 1 pour eviter la valeur tab[0]
for ($i = 1 ; $i < count($tab); $i++) { 

    $tabModif[] = $tab[$i];
    
}
//Reprendre la valeur de tab[0] "D" à la fin de tabModif[]
$tabModif[] = $stock;
print_r($tabModif);
?>