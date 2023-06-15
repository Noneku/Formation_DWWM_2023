<?php
include "Etudiant.class.php";
include "Filiere.class.php";




//Integration des etudiants dans la filiere Info

$nb = readline("Combien d'etudiants avez-vous en informatique? :");

for($i = 0 ; $i < $nb ; $i++){
$nom = readline("Saisir nom : ");
$prenom = readline("Saisir prenom : ");
$dateNaissance = readline("Saisir date de naissance : ");


$tabEtudiants[$i] = new Etudiant($nom, $prenom , $dateNaissance);
$informatique = new Filiere("IT" , "Informatique" , $tabEtudiants );
$tabFiliere[]= $informatique;
}


//Integration des etudiants dans la filiere Techno

$nb = readline("Combien d'etudiants avez-vous en Techno de l'info ? :");

for($i = 0 ; $i < $nb ; $i++){
$nom = readline("Saisir nom : ");
$prenom = readline("Saisir prenom : ");
$dateNaissance = readline("Saisir date de naissance : ");


$tabEtudiants[$i] = new Etudiant($nom, $prenom , $dateNaissance);
$techno = new Filiere("tech" , "Techno de l'info et de communication" , $tabEtudiants );
$tabFiliere[]= $techno;
}



//Integration des etudiants dans la filiere Geni

$nb = readline("Combien d'etudiants avez-vous en Génie Civil:");


for($i = 0 ; $i < $nb ; $i++){
$nom = readline("Saisir nom : ");
$prenom = readline("Saisir prenom : ");
$dateNaissance = readline("Saisir date de naissance : ");


$tabEtudiants[$i] = new Etudiant($nom, $prenom , $dateNaissance);
$geni = new Filiere("geni" , "Genie Civil" , $tabEtudiants );
$tabFiliere[]= $geni;
}

// $tabEtudiants = implode("\n" , $tabEtudiants);




//Stockage des filiere dans un array avec les etudiants
$tabFiliere= array($informatique  , $techno  , $geni );
print_r($tabFiliere);

// var_dump($informatique);






for ($i = 0 ; $i < count($tabFiliere) ; $i++){
    echo "Filiere : ".$tabFiliere[$i]->labelle;

        for ($j=0; $j < count($tabFiliere[$i][$j]) ; $j++) { 
            $afficherEtudiant =  implode("\n", $tabEtudiants); 
        }

}


// foreach ($tableau as $filiere) {
//     echo "Filière: " . $filiere->libelle . "<br>";
//     foreach ($filiere->tabEtudiants as $etudiant) {
//         echo $etudiant->__toString() . "<br>";
//     }
//     echo "<br>"; // Ajout d'une ligne vide entre chaque filière
// }


// foreach ($tabFiliere as $filiere) {
//     echo "Filière: " . $filiere->getLibelle() . "\n";
//     $etudiants = $filiere->getTabEtudiants();
//     foreach ($etudiants as $etudiant) {
//         echo $etudiant->__toString() . "\n";
//     }
//     echo "\n";
// }




// print_r($filiere);


?>