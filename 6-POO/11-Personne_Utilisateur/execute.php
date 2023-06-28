<?php

include('Utilisateur.class.php');

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

// instanciation des objets
$user1 = new Utilisateur("paul", "cesar", "paulcesar@gmail.com","0636781132", 1300,"Lern123", "slk457812", "Manager", "CP", "Manager");
$user2 = new Utilisateur("loic", "like", "loick@gmail","0636987442", 1300,"Clark456", "sdkfhjdi4578", "Manager", "MN", "Manager");
$user3 = new Utilisateur("charles", "mati", "cmati@gmail.com","0635647896", 1300,"Kevin789", "d,cdikf12032", "Directeur de projet", "DP", "Directeur de projet");
$user4 = new Utilisateur("michel", "leblanc", "mleblanc@gmail.com","0632459678", 1300,"Kamal435", "erofiue487", "Directeur general", "DP", "Directeur general");

//Creation tableau d'utilisateur

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