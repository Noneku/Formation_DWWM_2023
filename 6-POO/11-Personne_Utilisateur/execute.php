<?php

include "./Personne.class.php";
include "./Utilisateur.class.php";
include "./Profil.class.php";


$chefProjet = new Utilisateur ("Mouaci", "Leïla", "leila.mouaci@gmail.com", "0648000000", 1700, "Aliel", "1234", "service 1", "CP", "Chef de Projet");

$manager = new Utilisateur ("Blabla", "Bob", "bobblabla@gmail.com", "0615000000", 2500, "Bobla", "4567", "service 2", "MN", "Manager");

$manager1 = new Utilisateur ("Blop", "Plaf", "bloplaf@gmail.com", "0675000000", 2300, "Blop", "7891", "service 2", "MN", "Manager");

$dirProjet = new Utilisateur ("Cat", "Iris", "catiris@gmail.com", "0645800000", 3500, "Irisu", "6789", "service 3", "DP", "Directeur de Projet");

$dirRessourcesHumaines = new Utilisateur ("Colo", "Lolo", "lolocolo@gmail.com", "0685100000", 5200, "Cololo", "1234", "service 4", "DRH", "Directeur des ressources humaines");

$dirgen = new Utilisateur ("Chichi", "Sophie", "sophiechichi@gmail.com", "0613410000", 5500, "Sochie", "4567", "service 5", "DG", "Directeur général");


$utilisateurs = array ($chefProjet, $manager, $manager1, $dirProjet, $dirRessourcesHumaines, $dirgen);

echo "Liste des Utilisateurs : ";

for ($i = 0 ; $i < count($utilisateurs); $i++) {

    $utilisateurs[$i]->calculerSalaire();

    if ($utilisateurs[$i]->getProfil()->getLibelle() !== "Manager") {
        echo "\nIdentifiant : " .$utilisateurs[$i]->getProfil()->getId();
        echo $utilisateurs[$i]->__toString();
}
}

echo "\nListe des managers : ";

for ($i = 0 ; $i < count($utilisateurs); $i++) {

    if ($utilisateurs[$i]->getProfil()->getLibelle() == "Manager") {
        echo "\nIdentifiant : " .$utilisateurs[$i]->getProfil()->getId();
        echo $utilisateurs[$i]->__toString();
}
}
?>