<?php

// Saisie de l'age
echo " Entrez votre age : ";
$nb =  trim(fgets(STDIN));

// condition 
if ($nb <6 ) {
    echo " Vous n'entrez pas";
}
elseif ($nb >=6 && $nb <=7) {
        echo " Vous etes Poussin";
    
} elseif ($nb >=8 &&  $nb <=9) {
    echo " Vous etes Pupille";

} elseif ($nb >=10 &&  $nb <=11) {
    echo " Vous etes Minime";
}
else {
    echo " Vous etes cadet";
}

?>