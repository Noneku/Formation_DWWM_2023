<?php 

#On déclare et saisit les variables
echo "quel est lage de l'enfant";
$age = trim(fgets(STDIN));

if($age >= 6 && $age <= 7){
    echo  " poussin ";   
}

elseif($age >= 8 && $age <= 9){
    echo  " pupille ";
}

elseif($age >= 10 && $age <= 11){
    echo  " pupille ";
}

elseif ($age >= 12) {
    echo " cadet ";   
}


else {
    echo " ne correspond pas ";   
}
?>



