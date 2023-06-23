<?php

include("utilisateur.php");

$alissa = new Utilisateur("SYTH", "Alissa", "A.S@gmail.com", "06.40.12.48.78", 5000, "AS", "AZERTY", "IT", "CP", "chef de projet");
// echo $alissa->afficher();
// echo "\n";

$aimane = new Utilisateur("Parker", "Aimane", "P.A@gmail.com", "06.50.22.78.18", 10000, "PA", "AZERTY", "Management", "MN", "manager");
// echo $aimane->afficher();
// echo "\n";

$asaad = new Utilisateur("El Croco", "Asaad", "elcroco@gmail.com", "06.80.22.08.58", 20000, "ElCroco", "AZERTY", "direction", "DP", " Directeur de projet");
// echo $asaad->afficher();
// echo "\n";

$karim = new Utilisateur("K", "Karim", "KK@gmail.com", "06.85.54.78.02", 20000, "Karim.K", "AZERTY", "ressources humaines", "DRH", "Directeur des ressources humaines");
// echo $karim->afficher();
// echo "\n";

$loic = new Utilisateur("950", "Loic", "loic@gmail.com", "06.55.74.38.12", 30000, "L950", "AZERTY", "direction", "DG", "directeur general");
// echo $loic->afficher();
// echo "\n";


// stockage des objets dans un tableau
$tableauUtilisateur = array($alissa, $aimane, $asaad, $karim, $loic);

// Permet d'afficher la liste des Utilisateurs stockée dans un tableau 
echo "La liste des Utilisateurs : ";
echo "\n";
echo "\n";

for ($i = 0; $i < count($tableauUtilisateur); $i++) {

    echo $tableauUtilisateur[$i]->afficher();
}


// Permet d'afficher la liste des managers stockée dans un tableau 
echo "La liste des managers : ";
echo "\n";
echo "\n";

// La boucle va parcourir le tableau et afficher le manager 


for ($i = 0; $i < count($tableauUtilisateur); $i++) {
    
    if ($tableauUtilisateur[$i]->getService() === 'Management') {

        echo  $tableauUtilisateur[$i]->afficher();
    }
}


?>
