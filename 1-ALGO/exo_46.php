<?php
/* Soit T un tableau rangés dans l'ordre croissant. Ecrire un algo qui insère un élément donné X dans le tableau T en respectant l'odre croissant.*/ 


//Declaration
$tab = array(2,4,6,8,10,12);
$tab[] = readline("Saisir un nombre : ");
$stock = 0;



//Instruction
for ($i= 0; $i < count($tab) ; $i++){ 
//Pour parcourir un element du tableau
    for ($j=0; $j < count($tab); $j++) { 
        //Comparer le premier element avec tout les autres elements du tableau ( 2 et 4, 2 et 6, 2 et 8, 2 et 10, 2 et 12, 2 et la donnée de l'utlisateur)
        if($tab[$j] > $tab[$i]){
            //Si l'element comparer est superieur avec l'element[$i]
            $stock = $tab[$i];
            //Je stock la valeur inf
            $tab[$i] = $tab[$j];
            //la valeur inf prend la valeur sup
            $tab[$j] = $stock;
            //Je donne la valeur stocker inf dans valeur precedement sup
        }
    }

}
//Affichage
print_r($tab);



?>