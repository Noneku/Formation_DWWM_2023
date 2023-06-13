<?php
/* Ecrivez un algorithme 
permettant à l'utlisateur de saisir un nombre quelconque de valeurs,
 qui devront être stockés dans un tableau. 
 L'utilisateur doit donc commencer par entrer le nombre de valeurs qu'il compte saisir.
  Il effectuera ensuite cette saisie. Enfin une fois la saisie terminée. 
  Le progromamme affichera le nombre de valeurs négatives et le nombres de valeurs positives. */ 


  //Declarations
  $tab = array();
  $nbValeur = readline("Combien de valeur voulez-vous saisir ? : ");
  $nbNegatif = 0;
  $nbPositif = 0;

  //Instructions
    for ($i = 0; $i < $nbValeur; $i++){
        $nb = readline("Saisir votre valeur : ");
        $tab[$i] = $nb;
        if($nb < 0 ){
            $nbNegatif++;
        }else{
            $nbPositif++;
        }
    }
//Affichage
    echo "Il y a $nbPositif nombre positif et $nbNegatif de nombre négatif";

?>