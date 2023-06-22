<?php
include "personne.class.php";
include "utilisateur.class.php";
include "profil.class.php";




// Création des profils
$chefProjet = new Profil('Login1','Password1', 'Chef de Projet', 1, ' NOM', 'Prenom', 'AZAaz@gmail.com', "06 35 21 72 63", "4600", '12', 'CP' ) ;
$manager = new Profil('Login1','Password1', 'Manager', 2, ' NOM', 'Prenom', 'AZAaz@gmail.com', "06 35 21 72 63", "3600", '12', 'MN' ) ;
$directeurGeneral = new Profil('Login1','Password1', 'Directeur général', 3, ' NOM', 'Prenom', 'AZAaz@gmail.com', "06 35 21 72 63", "6600", '12', 'DR' ) ;
$directeurProjet = new Profil('Login1','Password1', 'Directeur Projet', 4, ' NOM', 'Prenom', 'AZAaz@gmail.com', "06 35 21 72 63", "45600", '12', 'DR' ) ;
$drh = new Profil('Login1','Passwod1', 'Directrice de Ressource Humaine', 5, ' NOM', 'Prenom', 'AZAaz@gmail.com', "06 35 21 72 63", "3600", '12', 'DR' ) ;


$utilisateur1 = new Utilisateur('Login1','Password1', 'Chef de Projet', 1, ' NOM', 'Prenom', 'AZAaz@gmail.com', "06 35 21 72 63", "5000"); 
$utilisateur2 = new Utilisateur('Login1','Password1', 'Manager', 2, ' James', 'Dada', 'jamda@gmail.com', "06 22 21 72 66", "3600"); 
$utilisateur3 = new Utilisateur('Login1','Password1', 'Directeur général', 3, ' Joe', 'hood', 'johns@gmail.com', "06 22 21 72 66", "3600"); 
$utilisateur4 = new Utilisateur('Login1','Password1', 'Manson', 4, 'Johnson', '', 'jamda@gmail.com', "06 22 21 72 66", "3600"); 

echo $utilisateur;

// Création des utilisateurs avec les différents profils
// $manager->calculerSalaire();
// echo $manager;
// echo "\r";
// $directeurGeneral->calculerSalaire();
// echo $directeurGeneral;

?>
