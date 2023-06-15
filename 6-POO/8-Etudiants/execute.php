<?php

include "./etudiants.class.php";
include "./filiere.class.php";


$nb = readline ("Indiquez le nombre d'étudiants à entrer : ");
for ($i = 0; $i < $nb; $i++) {
    $nom = readline ("Nom : ");
    $prenom = readline ("Prénom : ");
    $dateNaissance = readline ("Date de naissance (jj-dd-aaaa) : ");

    $listeEtu []= $etudiant[$i] = new Etudiant ($nom, $prenom, $dateNaissance);
}

$nb = readline ("Indiquez le nombre d'étudiants à entrer : ");
for ($i = 0; $i < $nb; $i++) {
    $nom = readline ("Nom : ");
    $prenom = readline ("Prénom : ");
    $dateNaissance = readline ("Date de naissance (jj-dd-aaaa) : ");

    $listeEtu2 []= $etudiant[$i] = new Etudiant ($nom, $prenom, $dateNaissance);
}

$nb = readline ("Indiquez le nombre d'étudiants à entrer : ");
for ($i = 0; $i < $nb; $i++) {
    $nom = readline ("Nom : ");
    $prenom = readline ("Prénom : ");
    $dateNaissance = readline ("Date de naissance (jj-dd-aaaa) : ");

    $listeEtu3 []= $etudiant[$i] = new Etudiant ($nom, $prenom, $dateNaissance);
}

// $etu1 = new Etudiant ("Lala", "Leïla", '18-10-1994');

// $listeEtu = array ($etu1);




$f1 = new Filiere ('INFO', "Informatique", $listeEtu);
$f2 = new  Filiere ('TEC', "Techno", $listeEtu2);
$f3 = new Filiere ('GEN', "Génie civile", $listeEtu3);

echo "\nListe des filières de notre école : \n";
echo "Code : " .$f1->getCode();
echo "\n";
echo "Libellé : " .$f1->getLibelle();
echo "\n";

echo "Code : " .$f2->getCode();
echo "\n";
echo "Libellé : " .$f2->getLibelle();
echo "\n";

echo "Code : " .$f3->getCode();
echo "\n";
echo "Libellé : " .$f3->getLibelle();
echo "\n";

echo $f1;
echo $f2;
echo $f3;





?>