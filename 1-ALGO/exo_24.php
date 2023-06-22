<?php

$age = readline("Entrez votre age : ");
$sexe = readline("Entrez votre sexe : ");

if($sexe == "h" && $age > 20){
    echo "Vous payez des impots !";
}elseif (($sexe == "f" && $age > 18) && ($sexe == "f" && $age < 35)) {
    echo "Vous payez des impots !";
}else {
    echo "Vous ne payez pas d'impots !";
}

?>