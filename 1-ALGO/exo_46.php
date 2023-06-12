<?php
/*T un tableau rangé dans l'odre croissant insere un element dans le tableau
en respectant l'odre*/ 
//Declaration
$tabT = array(2, 4, 6, 8, 10);
$tabT[] = readline("Entrez un chiffre à ajouter dans le tableau : ");
$max = 0;
echo"le tableau non trié\n";
print_r($tabT);

for($i = 0; $i < count($tabT); $i++) {//parcours le tableau
for ($j=0; $j < count($tabT)-1;$j++) { //
    //traitement
    if($tabT[$j]>$tabT[$j+1]){
        //permutation si la conditionest vraie
        $max=$tabT[$j+1];//on stocke la plus grande valeur dans $max.
        $tabT[$j+1]=$tabT[$j];//on decale le tableau.
        $tabT[$j]=$max;/*on recupere la plus grande valeur du 
                       tableau et on la stocke das $max.*/

    }
}
}
//sort($tabT);
echo "le tableau trié\n";
print_r($tabT);
?>