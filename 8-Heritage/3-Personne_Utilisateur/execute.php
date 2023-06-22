<?php

include 'Personne.classe.php';
include 'utilisateur.classe.php';
include 'Profil.classe.php';

// Création des profils
$profils = [
    new Profil(1, "CP", "Chef de projet"),
    new Profil(2, "MN", "Manager"),
    new Profil(3, "DP", "Directeur de projet"),
    new Profil(4, "DRH", "Directeur des ressources humaines"),
    new Profil(5, "DG", "Directeur général")
];

// Création des utilisateurs
$utilisateurs = [
    new Utilisateur("Aimane", "Belahacen", "Belahacen.aimane@example.com", "123456789", 5000, "CP123", "password123", "CP", $profils[0]),
    new Utilisateur("Karim", "Adjal", "Karim.Adjal@example.com", "987654321", 6000, "MN123", "password1234", "MN", $profils[1]),
    new Utilisateur("Alissa", "Sarayath", "alissa.sarayath@example.com", "555555555", 4000, "DP123", "password12345", "DP", $profils[2]),
    new Utilisateur("Azzaouaj", "Younes", "younes.Azzaouaj@example.com", "777777777", 4500, "DRH123", "password123456", "DRH", $profils[3]),
    new Utilisateur("Asaad", "Sahli", "Asaad.sahli@example.com", "888888888", 7000, "DP123", "password1234567", "DG", $profils[4]),
];


// Affichage de la liste des utilisateurs
echo "Liste des utilisateurs:" . PHP_EOL;
echo "*******************". PHP_EOL;
foreach ($utilisateurs as $utilisateur) {
    $utilisateur->affiche();
    echo PHP_EOL;
}

// Filtrer et afficher la liste des managers
echo "Liste des managers:" . PHP_EOL;
echo "*******************". PHP_EOL;
foreach ($utilisateurs as $utilisateur) {
    if ($utilisateur->getService() === "MN") {
        $utilisateur->affiche();
        echo PHP_EOL;
    }
}


?>
