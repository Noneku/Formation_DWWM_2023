<?php
include_once "etudiant.class.php";
include_once "filiere.class.php";

// Déclaration des tableaux pour les matières 
$nombreDeCompte = 5;// Nombre d'éléves à entrer
$tab_francais= array();
$tab_maths = array();
$tab_chimie = array();

// Boucle for afin de créer l'étudiant et venir lui mettre les paramètres du construct pour pouvoir inscrire dans la console nous même les infos demandé 
for($i=1; $i<=$nombreDeCompte;$i++){
$nom =readline("Entrer le nom de l'étudiant");  
$prenom =readline("Entrer le prenom");
$dateNaissance = readline("Entrer date de naissance");
${"etu".$i} = new Etudiant($nom,$prenom,$dateNaissance);  // Créer une instance de la classe Etudiant avec les informations fournies
$tabetu = readline("Choisir sa matière");// Demander à l'utilisateur de choisir la matière de l'étudiant

// Vérifier si la matière choisie est "Fr" (Français)
if ($tabetu == "Fr") {
    $tab_francais[] =${"etu".$i};    // Ajouter l'étudiant au tableau des étudiants en français

}

//  sinon la matière est Maths
elseif ($tabetu == "Mat") {
    $tab_maths[] = ${"etu".$i};
    
}
// Sinon c'est Chimie
elseif ($tabetu =="Chi") {
    $tab_chimie[] = ${"etu".$i};
    
} 

}
// création des filières par 3
$Francais = new Filiere("Fr","Français",$tab_francais);

$Maths = new Filiere("Mat","Mathématiques",$tab_maths);

$Chimie= new Filiere("Chi","Chimie",$tab_chimie);

 // Affiche l'étudiant et la matière (Français)
foreach ($Francais->getListeEtudiant() as $etudiant) {
    echo $etudiant . "\n" . "La matière est ";
    echo $Francais-> __toString() . "\n";
}
 // Affiche l'étudiant et la matière (mathématiques)
foreach ($Maths->getListeEtudiant() as $etudiant) {
    echo $etudiant . "\n" . "La matière est ";
    echo $Maths-> __toString() . "\n";
}
 // Affiche l'étudiant et la matière (chimie)
foreach ($Chimie->getListeEtudiant() as $etudiant) {
    echo $etudiant . "\n" . "La matière est ";
    echo $Chimie-> __toString();
}