<?php
include "Personne.class.php";
include "Employe.class.php";
include "Etudiant.class.php";
include "Professeur.class.php";

//création d'objet Personne
    $id= 0210;
    $nom = "Arkadij";
    $prenom = "Jegerov";
    $pers = new Personne($id, $nom, $prenom);
 
//création d'objet Employé
    $salaire = 2000000;
    $id = 000;
    $nom = "Burnwood";
    $prenom = "Diana";
    $emp = new Employe($salaire, $id, $nom, $prenom);

//création d'objet Etudiant
    $cne= 12821562546030;
    $id = 569721564;
    $nom = "Tobias";
    $prenom = "Reaper";
    $etu= new Etudiant($cne,$id,$nom,$prenom);

//création d'objet Specialité
    $specialite = "professeur de medecine";
    $salaire = 300000;
    $id = 100;
    $nom = "Otto Wolfgang";
    $prenom = "Ort-Meyer";
    $prof = new Professeur($specialite,$salaire,$id, $nom, $prenom);


    print_r($pers);
    print_r($emp);
    print_r($etu);
    print_r($prof);
    
   /* echo $pers;
    echo "\n";
    echo $prof;*/
    

?>