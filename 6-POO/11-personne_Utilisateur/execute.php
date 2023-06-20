<?php
include "Personne.class.php";
include "Utilisateur.class.php";
include "Profil.class.php";

$nb = readline("Nombre d'Employés : ");
$listeEmployes= array();

// creation de la liste des employés
for ($i=0; $i < $nb; $i++) 
{ 
    $nom=readline("donnez le nom de l'employé  : ");
    $prenom=readline("donnez le prénom de l'employé  : ");
    $mail=readline("donnez l'adresse Email de l'employé  : ");
    $tel=readline("Donnez le numéro de Téléphone : ");
    $salaire=readline("Donnez le salaire de l'employé : ");
    $poste=readline("Poste : ");
    $code=readline("Code : ");
    $login=readline("Login : ");
    $service=readline("Service : ");
    $listeEmployes[$i]=new Utilisateur($nom,$prenom,$mail,$tel,$salaire,$poste,$code,$login,$service);
}

//calcul du salaire
foreach ($listeEmployes as $employe)
{
    $employe->calculerSalaire();
}

// Affichage des employés    
echo "liste des employés";
foreach ($listeEmployes as $employe)
{
    echo $employe;
    echo"\n";
}

echo"\n";
//Les directeur et manager
echo "Directeur et Mananger";
echo"\n";
foreach ($listeEmployes as $employe) {

    if($employe->getUser()->getLibelle()=="Directeur" or $employe->getUser()->getLibelle()=="Manager" )
    {
        $employe->Afficher();
        echo"\n";
        echo"\n";
    }
}

// $directeur->calculerSalaire();
// $directeur->Afficher();


?> 