<?php

include "etudiant.class.php";
include "filliere.class.php";


// boucle + tableau fillière informatique pour intégrer les étudiants dans celui ci
$nb = readline ("Saississez le Nbr etudiant fillière informatique : ");
for ($i = 0; $i < $nb; $i++) {
    $N = readline ("Nom : ");
    $P = readline ("Prénom : ");
    $dN = readline ("Date de naissance (aaaa/mm/jj) : ");

    $LE1 []= $etud[$i] = new Etudiant ($N, $P, $dN);
}
// boucle + tableau fillière Techno pour intégrer les étudiants dans celui ci
$nb = readline ("Saississez le Nbr etudiant fillière Techno : ");
for ($i = 0; $i < $nb; $i++) {
    $N = readline ("Nom : ");
    $P = readline ("Prénom : ");
    $dN = readline ("Date de naissance (aaaa/mm/jj) : ");

    $LE2 []= $etud[$i] = new Etudiant ($N, $P, $dN);
}

// boucle + tableau fillière géni civil pour intégrer les étudiants dans celui ci
$nb = readline ("Saississez le Nbr etudiant fillière génie civil : ");
for ($i = 0; $i < $nb; $i++) {
    $N = readline ("Nom : ");
    $P = readline ("Prénom : ");
    $dN = readline ("Date de naissance (aaaa/mm/jj) : ");

    $LE3 []= $etud[$i] = new Etudiant ($N, $P, $dN);
}


// Création des objets Filières en intégrant les étudiants des tableaux précédemment créés :
$fil1 = new filliere ('info', "Informatique", $LE1);
$fil2 = new  filliere ('techno', "Technologique", $LE2);
$fil3 = new filliere ('GéniC', "Génie civil", $LE3);

// Affichage des informations demandées / liste des filières :
echo "\nListe des filières de notre école : \n";
echo "Libellé : " .$fil1->getLibelle(). " - Code : " .$fil1->getCode();
echo "\n";

echo "Libellé : " .$fil2->getLibelle(). " - Code : " .$fil2->getCode();
echo "\n";

echo "Libellé : " .$fil3->getLibelle().  " - Code : " .$fil3->getCode();
echo "\n";

// Affichage des informations demandées / liste des étudiants par filières :
echo $fil1;
echo $fil2;
echo $fil3;


?>

// echo $bat;
// echo "\n";
// echo $maison;