<?php
/*Ecrire un algo qui demande l'age de l'enfant et l'informe de ça catégorie
6 à 7 ans poussin
8 à 9 ans pupille
10 à 11 ans minime
12 ans et + cadet*/
// Declaration

$age= readline("tapez un l'age de l'enfant : ");

// calcul & Affichage
if($age<6){
    echo "trop jeune";
}
elseif ($age==6 or $age<=7 ){
    echo "categorie poussin";
}elseif($age==8 or $age<=9 ){
    echo "categorie pupille";
}elseif($age==10 or $age<=11 ){
    echo "categorie minime";
}else{
    echo "categorie cadet";
}

?>