<?php

//on declare et saisie les variables
echo "entrer l'age d'un enfant";
$age = trim(fgets(STDIN));

//on teste

if ($age >=6 && $age <=7) {
  echo "poussin";
}
elseif ($age >= 8 && $age <= 9) {
    echo "pupille";
}
elseif ($age >= 8 && $age <= 9) {
    echo "pupille";
}
elseif ($age >= 10 && $age <= 11) {
    echo "Minime";
}

elseif($age >=12) {
    echo "cadet";
}
else{
    echo "ne correspond pas";
}

?>