<?php
//  declaration des tableau
$tab1 = array (4,8,7,9,1,5,4,6);
$tab2 = array(7,6,5,2,1,3,7,4);
$tab3 = array ();

// boucle pour $i allant de 0 a la longueur du tableau $tab2 $i++ avance de 1 en 1
for ($i = 0 ; $i < count ($tab2) ; $i++)
{
    
    $tab3[$i] = $tab1[$i] + $tab2[$i];
    
}

// affichage
print_r ($tab3);
?>