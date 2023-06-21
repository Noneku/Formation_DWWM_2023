<?php
//Toujours et encore sur le même principe, écrivez un algorithme permettant, à l'utilisateur de saisir les notes
//d'une classe. Le programme, une fois la saisie terminée, renvoie le nombre de ces notes supérieure à la moyenne de 
//la classe.



//création de tableau.
$tab1 = array();

//Déclaration variable.

$som = 0;
$moyenne = 0; 
$nombresup = 0;

$nombretab = 0;

echo "Entrez le nombre de notes: ";
$nombretab = intval(readline()); // Demande à l'utilisateur d'entrer un nombre

//INSTRUCTION

for ($i = 0; $i < $nombretab; $i++) {
    echo "Entrez la note n° " . ($i + 1) . ": ";  //est utilisé pour afficher le numéro de l'itération (1, 2, 3,... 
    $tab1[$i] = intval(readline());
    $som = $som + $tab1[$i]; 
}

$moyenne = $som / $nombretab;

for ($i = 0; $i < $nombretab; $i++) {
  if ($tab1[$i] > $moyenne ) {
  $nombresup++;
}

  }

  echo  $nombresup . " élève(s) dépasse la moyenne de la classe.";



?>