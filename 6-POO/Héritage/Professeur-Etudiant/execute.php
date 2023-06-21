<?php
include './Personne-class.php';
include './Etudiant-class.php';
include './Employe-class.php';
include './Professeur-class.php';

// Création d'objet de la class Personne



// Création d'objet de la class Etudiant

$etud = new Etudiant(4, 'Hirako', 'Shinji', 1523684);
$etud2 = new Etudiant(4, 'Kurosaki', 'Ichigo', 1457831);

// Création d'objet de la class Employe

$empl = new Employe(1, ' Azaaouaj ', 'Younes ', '4000 euros');
$empl2 = new Employe(2, ' Martin ', 'Matin ', '4500 euros');

// Création d'objet de la class Professeur
 
$prof = new Professeur(3, 'Marvin', 'Martin', '4600 euros', 'MArketing');
$prof2 = new Professeur(3, 'Lebron', 'James', '14600 euros', 'Sport');


// Affichage
// print_r($per);
// echo "\n";
// print_r($etud);
// echo "\n";
// print_r($empl);
// echo "\n";
// print_r($prof);
        echo 'Liste des employés : ';
        echo "\n";
        echo $empl;
        echo "\n";
        echo $empl2;
        echo "\n";
        echo 'Liste des Etudiants: ';
        echo "\n";
        echo $etud;
        echo "\n";
        echo $etud2;
        echo 'Liste des Professeur';
        echo "\n";
        echo $prof;
        echo "\n";
        echo $prof2;




?>