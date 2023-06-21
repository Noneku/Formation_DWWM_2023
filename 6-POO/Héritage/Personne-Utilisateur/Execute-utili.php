<?php
include './Personne-class.php';
include './Utilisateur-class.php';
include './Profil-class.php';


$chefDeProjet = new Profil(1, 'Azaaouaj', 'Younes', 'Azayou@gmail.com', '06 13 33 35 74', 4500, 'azj59', 'fullbuster','Chef de Projet', 'CP', 'log');

$manager = new Profil(2, 'Azaaouaj', 'Younes', 'Azayou@gmail.com', '06 13 33 35 74', 4500, 'azj59', 'fullbuster','Manager', 'MN', 'pog');


$directeurProjet = new Profil(3, 'Azaaouaj', 'Younes', 'Azayou@gmail.com', '06 13 33 35 74', 4500, 'azj59', 'fullbuster','Directeur de Projet', 'DP', 'nog');


$directeurRessourcesHumaines = new Profil(4, 'Azaaouaj', 'Younes', 'Azayou@gmail.com', '06 13 33 35 74', 4500, 'azj59', 'fullbuster','Directeur des ressources humaines', 'DRH', 'tog');


$directeurGeneral = new Profil(5, 'Azaaouaj', 'Younes', 'Azayou@gmail.com', '06 13 33 35 74', 4500, 'azj59', 'fullbuster','Directeur Régional', 'DR', 'gog');


$utilisateur1 = new Utilisateur(6, 'Azaaouaj', 'Younes', 'Azayou@gmail.com', '06 13 33 35 74', 4500, 'azj59', 'fullbuster', 'Directeur général');
$utilisateur = new Utilisateur(7, 'Lebecq', 'Xavier', 'Azay@gmail.com', '06 31 33 53 47', 4000, 'xav59', 'buster', 'Manager');

$utilisateur1->calculerSalaire(); // Applique l'augmentation appropriée
$utilisateur->calculerSalaire();
$manager->calculerSalaire();
$directeurGeneral->calculerSalaire();
$utilisateur1->affiche(); // Affiche les informations de l'utilisateur


echo "Liste des utilisateurs :\n";
// Créer d'autres utilisateurs avec des profils différents
$listeUtilisateurs = array($utilisateur1, $utilisateur);


foreach ($listeUtilisateurs as $utilisateur) {
    $utilisateur->affiche();
}



echo "\n Liste des managers :\n";
foreach ($listeUtilisateurs as $utilisateur) {
    if ($utilisateur-> getService() === "Manager") {
        $utilisateur->affiche();
    }if ($manager -> getService() === 'Manager') {
        $manager ->affiche();
    }
}








?>