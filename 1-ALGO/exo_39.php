<?php


// Ecrivez un algorithme permettant à l'utilisateur de saisir les notes d'une classe. Le programme une fois la saisie terminée, renvoies
// le nombre de ces notes supérieurs à la moyenne de la classe


$nbSaisie = readline("Entrez le nombre de note à saisir: ");
$tableauNote = array();
$totalTableau = null;
$totalNote = null;
$moyenneClasse = null;
$noteSup = null;

// premiere boucle : si $i est inférieur au nombre saisie, on va incrémenter une nouvelle boucle 
for ($i = 0; $i < $nbSaisie; $i++){

// $tableauNote[$i] va prendre le nombre de boucle qui est égal à l'index et va en meme temps  remplir le tableau grace à la saisie des notes 
    $tableauNote[$i] = readline("Entrez la note : ");

//  le $totalNote++ permet de récupérer le nombre de note total 
    $totalNote++;
// permets d'additionner tout les nombres du tableau 
    $totalTableau += $tableauNote[$i];

// calcul de la moyenne
    $moyenneClasse= $totalTableau / $totalNote;
}

// deuxieme boucle qui permet de parcourir le tableau grace à l'index, le tableau étant déjà construit grace à la premiere boucle 
for ( $i = 0; $i < $nbSaisie; $i++ ) {

// si les notes du tableau sont inférieures à la moyenne de la classe, alors on enregistre la note supérieure grace à $noteSup++
        if ( $tableauNote[$i] > $moyenneClasse) {

        $noteSup++;

    }  
}


echo " Le total du tableau est : ".$totalTableau;
echo "\n";
echo " le nombre total de note est : ". $totalNote;
echo "\n";
echo " La moyenne de la classe est : ".$moyenneClasse;
echo "\n";
echo print_r($tableauNote);
echo "\n";
echo " il y a : ".$noteSup. " note(s) supérieure(s) à la moyenne de la classe";
// echo "\n";
// echo " le tableau est de longueur ".count($tableauNote);

?>