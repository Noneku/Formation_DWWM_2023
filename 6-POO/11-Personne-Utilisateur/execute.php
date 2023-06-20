<?php

include('./Utilisateur.php');

// // //Instantiation object Profil
// $chefDeProjet = new Profil("CP", "Chef de projet");
// $manager = new Profil("MN", "Manager");
// $directeurDeProjet = new Profil("DP", "Directeur de projet");
// $directeurDesRessourcesHumaines = new Profil("DRH", "Directeur des ressources humaines");
// $directeurGeneral = new Profil("DP", "Directeur general");


// $profilsArray = [$chefDeProjet, 
//     $manager, 
//     $directeurDeProjet, 
//     $directeurDesRessourcesHumaines, 
//     $directeurGeneral
// ];

//Instantiation object Users
$user1 = new Utilisateur("Lern", "Sarah", "sarah@gmail.com","0645782132", 1300,"Lern123", "slk457812", "Manager", "CP", "Manager");
$user2 = new Utilisateur("Ferp", "Clark", "clark@gmail.com","0645782132", 1300,"Clark456", "sdkfhjdi4578", "Manager", "MN", "Manager");
$user3 = new Utilisateur("Candy", "Kevin", "kevin@gmail.com","0645782132", 1300,"Kevin789", "d,cdikf12032", "Directeur de projet", "DP", "Directeur de projet");
$user4 = new Utilisateur("Laso", "Kamal", "kamal@gmail.com","0645782132", 1300,"Kamal435", "erofiue487", "Directeur general", "DP", "Directeur general");

//Create Array Users

$Users = [
    $user1,
    $user2,
    $user3,
    $user4 
];

//Display all Users
// echo "\n";
// echo $user1->affiche() . "\n\n";
// echo $user2->affiche() . "\n";
// echo $user3->affiche() . "\n";
// echo $user4->affiche() . "\n";
// echo "\n";

?>