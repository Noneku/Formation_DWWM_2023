<?php
$tab1 = array (4,8,7,9,1,5,4,6);
$tab2 = array (7,6,5,2,1,3,7,4);
$tab3 = array ();



//additionner deux tableaux
for($i=0; $i < count($tab1) ; $i++){
    $tab3[$i] = $tab2[$i] + $tab1[$i];
}
print_r ($tab3);
?>