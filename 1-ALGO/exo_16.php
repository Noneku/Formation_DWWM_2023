<?php

//Declaration
$nbr = readline("Saisir votre nombre : ");

//Instructions
if($nbr == 0 ){
   //affichage si le nombre égale zero
    echo "Le nombre choisis est égale à zero";
}
elseif($nbr < 0 ){
    //affichage true : si le nombre est inférieur à zero
    echo "Le nombre choisis est négatif" ;
}else{
    //affichage false : si le nombre est supérieur à zero
        echo "Le nombre est positif";
}


?>