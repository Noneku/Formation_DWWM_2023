<?php
include "personne.class.php";
include "profil.class.php";

// Demander le nombre d'utilisateurs souhaités
$nbUtilisateur = readline("Combien d'utilisateurs souhaites-tu ajouter ? ");

// Array contenant la liste des profils
$listeProfil = array("CP"=>"Chef de projet", "MN"=>"Manager", "DP"=>"Directeur de projet", "DRH"=>"Directeur des ressources humaines", "DG"=>"Directeur général");

// Array vide futur conteneur de la liste des utilisateurs
$listeUtilisateur = array();

// Boucle afin d'insérer le nombre demandé d'utilisateurs
for ($i=0; $i < $nbUtilisateur; $i++) { 
    $j = 0;
    $nom = readline("Nom : ");
    $prenom = readline("Prénom : ");
    $mail = readline("Mail : ");
    $telephone = readline("Téléphone : ");
    $salaire = readline("Salaire : ");
    $login = readline("Nom d'utilisateur : ");
    $password = readline("Mot de passe : ");
    $service = readline("Service : ");
    foreach ($listeProfil as $key => $value) {
        if ($service == $value) {
            $code = $j;
            $libelle = $key;
        }
        $j++;
    }
    $listeUtilisateur[$i] = new Profil($nom, $prenom, $mail, $telephone, $salaire, $login, $password, $service, $code, $libelle);
} 

$listeUtilisateur[0]->affiche();