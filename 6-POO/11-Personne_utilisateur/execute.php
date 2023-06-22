<?php
include_once "Personne.class.php";
include_once "Profil.class.php";
include_once "Utilisateur.class.php";

    // Création des profils
$chefProjet = new Profil("CP", "Chef de projet");
$manager = new Profil("MN", "Manager");
$directeurProjet = new Profil("DP", "Directeur de projet");
$directeurRH = new Profil("DRH", "Directeur des ressources humaines");
$directeurGeneral = new Profil("DG", "Directeur général");

// Création des utilisateurs
$utilisateurs = [
  new Utilisateur("Fabien" , "Girard" ,"fabiengirard@gmail.com" , "2598441" , 5000 , "Fgirard60", "blabla" , "Gestion" , "DG" , "Directeur général"),
  new Utilisateur("Dupont", "Jean", "jean.dupont@mail.com", "123456789", 4200 , "jdupont", "password123", "Gestion" , "MN" , "Manager"),
  new Utilisateur("Martin", "Sophie", "sophie.martin@mail.com", "987654321", 4500, "smartin", "password456", "Informatique" ,  "CP" , "Chef de projet"),
  new Utilisateur("Durand", "Pierre", "pierre.durand@mail.com", "456789123", 6000, "pdurand", "password789", "Direction" , "DP" , "Directeur de projet")

];

// Affichage de la liste des utilisateurs
foreach ($utilisateurs as $utilisateur) {
  $utilisateur->affiche();
  echo "\n";
}

// Filtrage et affichage de la liste des managers
echo "Liste des managers :\n";
foreach ($utilisateurs as $personne) {
  if ($personne->getProfil()->getCode() === "CP") {
    $personne->affiche();
    echo "\n";
  }
}
?>