<?php

include_once "Personne.classe.php";
include_once "utilisateur.classe.php";
include_once "Profil.classe.php";


// Création d'un objet Utilisateur ($nom,$prenom,$mail,$telephone,$salaire,$login,$password,$service);
$utilisateur1 = new Utilisateur( "Sahli", "Asaad", "Sahliasaad2@hotmail.fr", "0123456789", 2000, "Elcorco", "password123", "Manager");
$utilisateur2 = new Utilisateur( "AFPA", "Dwwm", "Sahliasaad2@hotmail.fr", "0123456789", 4000, "Elcorco", "password123", "Directeur général");



// Utilisation de la méthode affiche pour afficher toutes les informations de l'utilisateur
echo $utilisateur1->affiche();
echo PHP_EOL;
echo $utilisateur2->affiche();
echo PHP_EOL;
echo "******************";echo PHP_EOL;

// Création des profils
//($nom,$prenom,$mail,$telephone,$salaire,$login,$password,$service,$code,$libelle)
$profil1 = new Profil("Belahacen","Aimane","BelahacenAimane@gmail.com","098765432",4000,"Batman","azerty","Informatique","CP","Chef de projet");
$profil2 = new Profil("Adjal","Karim","Adjakarim@gmail.com","0987654321",5000,"Lalute","azertyu","Informatique","MN","Manager");
$profil3 = new Profil("Sarayath","Alissa","SarayaAlissa@gmail.com","09876543211",6000,"Monga","azertyui","Informatique","DP","Directeur de projet");
$profil4 = new Profil("Azaouadj","Younes","AzaouadjYounes@gmail.com","09876543222",7000,"Spotify","azertyIUY","Informatique","DRH","Directeur des ressources humaines");
$profil5 = new Profil("Gacem","Nassim","GacemNassim@gmail.com","09876543332",11000,"Sport","azererty","Informatique","DG","Directeur général");

echo $profil1->Affiche();
echo PHP_EOL;
echo $profil2->Affiche();
echo PHP_EOL;
echo $profil3->Affiche();
echo PHP_EOL;
echo $profil4->Affiche();
echo PHP_EOL;
echo $profil5->Affiche();

// Création des utilisateurs avec les profils métiers
$utilisateur3 = new Utilisateur("Belahacen","Aimane","BelahacenAimane@gmail.com","098765432", 3000, "Login3", "MotDePasse3", "Informatique", "CP", "Chef de projet");
$utilisateur4 = new Utilisateur("Adjal","Karim","Adjakarim@gmail.com","0987654321", 4000, "Login4", "MotDePasse4", "Informatique", "MN", "Manager");
$utilisateur5 = new Utilisateur("Sarayath","Alissa","SarayaAlissa@gmail.com","09876543211", 5000, "Login5", "MotDePasse5", "Informatique", "DP", "Directeur de projet");
$utilisateur6 = new Utilisateur("Azaouadj","Younes","AzaouadjYounes@gmail.com","09876543222", 6000, "Login6", "MotDePasse6", "Comptabilité", "DRH", "Directeur des ressources humaines");
$utilisateur7 = new Utilisateur("Gacem","Nassim","GacemNassim@gmail.com","09876543332", 7000, "Login7", "MotDePasse7", "Informatique", "DG", "Directeur général");

echo PHP_EOL;

// Liste des utilisateurs
$profils = array($profil1, $profil2, $profil3, $profil4, $profil5);

// Affichage de la liste des utilisateurs
echo "Liste des utilisateurs :" ;echo PHP_EOL;
echo "******************";echo PHP_EOL;
foreach ($profils as $profil) {
    echo $profil->affiche() ;echo PHP_EOL;
}

// Filtrer et afficher la liste des managers
echo "Liste des managers :" ;echo PHP_EOL;
echo "******************";echo PHP_EOL;
foreach ($profils as $profil) {
    if ($profil->getCode() === "MN") {
        print_r($profil->Affiche())  ;echo PHP_EOL;
    }
}
?>