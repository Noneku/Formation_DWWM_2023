<?php

include_once "personne.class.php";
include_once "utilisateur.class.php";
include_once "profil.class.php";

// Création d'un objet Utilisateur ($nom,$prenom,$mail,$telephone,$salaire,$login,$password,$service);
$utilisateur1 = new Utilisateur( "Belahcen", "Aimane", "BelahcenAimane@gmail.com", "0123456789", 2000, "Batman", "password123", "Manager");
$utilisateur2 = new Utilisateur( "AFPA", "DWWM", "afpa@hdf.com", "0123456789", 4000, "HDF", "afpa2020", "Directeur général");

// Utilisation de la méthode affiche pour afficher toutes les informations de l'utilisateur
echo $utilisateur1->affiche(). "\n";
echo $utilisateur2->affiche(). "\n";

//Création des profils ($nom,$prenom,$mail,$telephone,$salaire,$login,$password,$service,$code,$libelle)
$profil1 = new Profil("Belahcen","Aimane","BelahcenAimane@gmail.com","098765432",4000,"Batman","azerty","Informatique","CP","Chef de projet");
$profil2 = new Profil("Adjal","Karim","Adjalkarim@gmail.com","0987654321",5000,"ufc","azertyu","Informatique","MN","Manager");
$profil3 = new Profil("Sayarath","Alissa","SayarathAlissa@gmail.com","09876543211",6000,"Manga","azertyui","Informatique","DP","Directeur de projet");
$profil4 = new Profil("sahli","asaad","sahliasaad@gmail.com","09876543222",7000,"Lacoste","azertyIUY","Informatique","DRH","Directeur des ressources humaines");
$profil5 = new Profil("Lepeuch","Loick","LepeuchLoick@gmail.com","09876543332",11000,"Spotify","azererty","Informatique","DG","Directeur général");

// Affichage des profils 
echo $profil1->Affiche(). "\n";
echo $profil2->Affiche(). "\n";
echo $profil3->Affiche(). "\n";
echo $profil4->Affiche(). "\n";
echo $profil5->Affiche(). "\n";

// Création des utilisateurs avec les profils métiers
$utilisateur3 = new Utilisateur("Belahcen","Aimane","BelahcenAimane@gmail.com","098765432", 3000, "Login3", "MotDePasse3", "Informatique", "CP", "Chef de projet");
$utilisateur4 = new Utilisateur("Adjal","Karim","Adjalkarim@gmail.com","0987654321", 4000, "Login4", "MotDePasse4", "Informatique", "MN", "Manager");
$utilisateur5 = new Utilisateur("Sayarath","Alissa","SayarathAlissa@gmail.com","09876543211", 5000, "Login5", "MotDePasse5", "Informatique", "DP", "Directeur de projet");
$utilisateur6 = new Utilisateur("Sahli","Asaad","sahliasaad@gmail.com","09876543222", 6000, "Login6", "MotDePasse6", "Comptabilité", "DRH", "Directeur des ressources humaines");
$utilisateur7 = new Utilisateur("Lepeuch","Loick","lepeuchloick@gmail.com","09876543332", 7000, "Login7", "MotDePasse7", "Informatique", "DG", "Directeur général");

echo "\n";

// Liste des utilisateurs
$profils = array($profil1,$profil2,$profil3,$profil4,$profil5);

// Affichage de la liste des utilisateurs
echo "Liste des utilisateurs :" ."\n";
echo "**********************" ."\n";
foreach ($profils as $profil) {
    echo $profil->affiche() ."\n";
}

// Filtrer et afficher la liste des managers
echo "Liste des managers :" ."\n";
echo "******************" ."\n";
   foreach ($profils as $profil) {
    if ($profil->getCode() === "MN") {
        echo $profil->Affiche() ."\n";
     
    }
}