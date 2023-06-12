<?php
/* les habitants de paris payent l'impots selon les règle suivantes
-les hommes de plus de 20ans paient l'impôt
-les femmes paient l'impôts si elles ont entre 18 et 35ans 
-les autres ne paient pas d'impôts
le programme demandera donc l'age et le sexe du pariesien et prononcera ensuite si il est imposable*/
// Declaration

$age=0;
echo "quel est votre sexe : ";
$sexe = trim(fgets(STDIN));
echo "quel est votre age : ";
$age = trim(fgets(STDIN));
//traitement

if ($sexe=="homme" and $age>20) {

    echo "vous êtes imposable";

}elseif ($sexe=="femme" and($age>18 and $age<=35 )) {

    echo "vous êtes imposable";

}else {

    echo "vous n'êtes pas imposable";
    
}

// if (($sexe=="homme" and $age>20) or ($sexe=="femme" and($age>18 and $age<=35 ))) {
//     echo "vous êtes imposable";
// }else {
//     echo "vous n'êtes pas imposable";
// }


?>