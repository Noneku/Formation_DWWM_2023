<?php
//2 Variables sexe et $age
$sexe = readline("Entrer votre sexe : ");
$age = readline("Entrer votre âge : ");

if($sexe == "H" && $age >= 20){
    echo "Vous êtes imposables";
}elseif (($sexe == "F") && ($age >= 18 && $age <= 35)) {
    echo "Vous êtes imposables";
}else{
    echo "Vous n'êtes pas imposables";
}
?>