<?php
//on declare et saisie des variables
echo "entrer un nbr";
$nbr = trim(fgets(STDIN));

//on teste 

 if ($nbr == 0) {
    echo "ce nombre est null";

}
elseif($nbr>0) {
   echo "le nbr est positif";
}
elseif($nbr<0) {
    echo "le nbr est negatif";
}


?>