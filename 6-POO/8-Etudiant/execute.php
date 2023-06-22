<?php
include "Etudiant.class.php";
include "Filiere.class.php";

$filieres = array(
    new Filiere('INF', 'Informatique'),
    new Filiere('TIC', 'Techno de l\'info et de communication'),
    new Filiere('GC', 'Génie civil')
);

$etudiants = array(
    new Etudiant('Rashid', 'Mohamed', '1995/01/02'),
    new Etudiant('Yves', 'Chakib', '1992/04/02'),
    new Etudiant('Martin', 'Manal', '2011/03/02'),
    new Etudiant('Jacques', 'Meriem', '2000/11/02'),
    new Etudiant('Rami', 'Mouad', '2013/01/02')
);

// Ajout des étudiants dans les filières respectives
$filieres[0]->addEtudiant($etudiants[0]);
$filieres[0]->addEtudiant($etudiants[1]);
$filieres[1]->addEtudiant($etudiants[2]);
$filieres[2]->addEtudiant($etudiants[3]);
$filieres[2]->addEtudiant($etudiants[4]);

// Affichage des filières
echo "La liste des filières de notre école :\n";
for ($i = 0; $i < count($filieres); $i++) {
    echo $filieres[$i] . "\n";
}

// Affichage des étudiants par filière
echo "\nListe des étudiants par filière :\n";
for ($i = 0; $i < count($filieres); $i++) {
    // Vérifier si la filière a des étudiants
    if (count($filieres[$i]->getEtudiants()) > 0) {
        echo $filieres[$i] . "\n";
        for ($j = 0; $j < count($filieres[$i]->getEtudiants()); $j++) {
            echo $filieres[$i]->getEtudiants()[$j] . "\n";
        }
    }
}