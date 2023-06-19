<?php

include "./etudiants.class.php";
include "./filiere.class.php";


// Boucle permettant d'entrer des étudiants en saisie et de les intégrer dans un tableau pour la filière Informatique :
$nb = readline ("Indiquez le nombre d'étudiants à entrer pour la filière informatique : ");
for ($i = 0; $i < $nb; $i++) {
    $nom = readline ("Nom : ");
    $prenom = readline ("Prénom : ");
    $dateNaissance = readline ("Date de naissance (jj-dd-aaaa) : ");

    $listeEtu []= $etudiant[$i] = new Etudiant ($nom, $prenom, $dateNaissance);
}

// Boucle permettant d'entrer des étudiants en saisie et de les intégrer dans un tableau pour la filière Techno :
$nb = readline ("Indiquez le nombre d'étudiants à entrer pour la filière Techno : ");
for ($i = 0; $i < $nb; $i++) {
    $nom = readline ("Nom : ");
    $prenom = readline ("Prénom : ");
    $dateNaissance = readline ("Date de naissance (jj-dd-aaaa) : ");

    $listeEtu2 []= $etudiant[$i] = new Etudiant ($nom, $prenom, $dateNaissance);
}

// Boucle permettant d'entrer des étudiants en saisie et de les intégrer dans un tableau pour la filière Génie Civil :
$nb = readline ("Indiquez le nombre d'étudiants à entrer pour la filière Génie Civil : ");
for ($i = 0; $i < $nb; $i++) {
    $nom = readline ("Nom : ");
    $prenom = readline ("Prénom : ");
    $dateNaissance = readline ("Date de naissance (jj-dd-aaaa) : ");

    $listeEtu3 []= $etudiant[$i] = new Etudiant ($nom, $prenom, $dateNaissance);
}


// Création des objets Filières en intégrant les étudiants des tableaux précédemment créés :
$f1 = new Filiere ('INFO', "Informatique", $listeEtu);
$f2 = new  Filiere ('TEC', "Techno", $listeEtu2);
$f3 = new Filiere ('GC', "Génie civil", $listeEtu3);

// Affichage des informations demandées / liste des filières :
echo "\nListe des filières de notre école : \n";
echo "Libellé : " .$f1->getLibelle(). " - Code : " .$f1->getCode();
echo "\n";

echo "Libellé : " .$f2->getLibelle(). " - Code : " .$f2->getCode();
echo "\n";

echo "Libellé : " .$f3->getLibelle().  " - Code : " .$f3->getCode();
echo "\n";

// Affichage des informations demandées / liste des étudiants par filières :
echo $f1;
echo $f2;
echo $f3;


?>