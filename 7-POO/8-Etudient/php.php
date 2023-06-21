<?php



class Personne
{

  private string $Nom;
  private string $Prenom;
  private string $dateNaissance;
  private string $dateEmbauche;


  function __construct($Nom, $Prenom, $dateNaissance, $dateEmbauche)
  {
    $this->Nom = $Nom;
    $this->Prenom = $Prenom;
    $this->dateNaissance = $dateNaissance;
    $this->dateEmbauche = $dateEmbauche;
  }

  public function age()
  {
    $anneeNaissance = 1990;
    $anneeActuelle = date("Y");
    $age = $anneeActuelle - $anneeNaissance;

    return $age;
  }
  public function Anciennete()
  {
    $anneeDembauche = 2012;
    $anneeActuelle = date("Y");
    $Anciennete = $anneeActuelle - $anneeDembauche;

    return $Anciennete;
  }

  // public function augmentationDuSalaire()
  //     {
  //         $anciennete = $this->anciennete();
  //         $nouveauSalaire = $this->salaire;






  public function getNom()
  {
    return $this->Nom;
  }


  public function getPrenom()
  {
    return $this->Prenom;
  }


  public function getDateNaissance()
  {
    return $this->dateNaissance;
  }

  public function getDateEmbauche()
  {
    return $this->dateEmbauche;
  }


  public function Affichage()
  {

    echo "je m'appelle" . " " . $this->getNom() . " " . $this->getPrenom() . "et je suis embaucher depuis" . " " . $this->getDateEmbauche();
  }
}


$employe = new Personne("SAHLI", "Asaad", "04/08/1990", "5/11/2012");
$employe->Affichage();
echo "\n et j'ai" . " " . $employe->age();
echo "\n et j'ai" . " " . $employe->Anciennete() . " " . "d'enciennete";

// public function augmentationDuSalaire()
//     {
// $anciennete = 11;
// $nouveauSalaire = 2000;
// switch ($anciennete) {
//     case (($anciennete < 5)):
//        $nouveauSalaire *= 0.02;
//         break;
//     case (($anciennete < 10)):
//          $nouveauSalaire *= 0.05;
//         break;
//     default:
//        $nouveauSalaire *= 0.1;
//         break;
// }
// return $nouveauSalaire;

//     }

//     echo "Le nouveau salaire est de : " . $nouveauSalaire;
// for ($i = 2023; $i >= 1990; $i--) {
//     echo $i . "\n";
// }

$currentYear = date("2023");

for ($i = 1990; $i <= $currentYear; $i++) {
  $age = $currentYear - $i;
  echo $i . ", Âge : " . $age . "\n";
}




// echo "Âge : " . $age;








// if ($anciennete < 5) {
//     $nouveauSalaire *= 0.02; // Augmentation de 2%
// } elseif ($anciennete < 10) {
//     $nouveauSalaire *= 0.05; // Augmentation de 5%
// } else {
//     $nouveauSalaire *= 0.1; // Augmentation de 10%
// }

// return $nouveauSalaire;


include "filiere.classe.php";

// $etudiant1 = new Etudiant("Rashid", "Mohamed", "1995/01/02");
// $etudiant2 = new Etudiant("Yves", "Chakib", "1992/04/02");
// $etudiant3 = new Etudiant("ASAAD", "ASAAD", "2011/03/02");
// $etudiant4 = new Etudiant("AIMANE", "AIMANE", "2000/11/02");
// $etudiant5 = new Etudiant("KARIM", "KARIM", "2013/01/02");

//$etudientarray = array($etudiant1,$etudiant2,$etudiant3,$etudiant4,$etudiant5);

//var_dump($etudiant1,$etudiant2,$etudiant3,$etudiant4,$etudiant5);

$filiere1 = new Filiere($etudiant1, "AFT", "Informatique");
$filiere2 = new Filiere($etudiant2, "TIC", "Techno de l'informatique et de communication");
$filiere3 = new Filiere($etudiant3, "COE", "Génie civil");
$filiere4 = new Filiere($etudiant4, "BTR", "Génie civil");
$filiere5 = new Filiere($etudiant5, "CAIOU", "Génie civil");



//$filiereArray = array($filiere1, $filiere2, $filiere3, $filiere4, $filiere5);

//$nouvelEtudiant = new Etudiant("AHMED", "AHMED", "1994/12/15");
//$filiereIndex = 5; // Indice de la filière à laquelle ajouter l'étudiant

//var_dump($filiere1,$filiere2, $filiere3, $filiere4, $filiere5);

//array_combine($filiereArray,$etudientarray);

// if (isset($filiereArray[$filiereIndex])) {
//   $filiereArray[$filiereIndex]->getEtudiant($nouvelEtudiant);
// } else {
//   echo "La filière spécifiée n'existe pas.";
// }



// $filiereIndex = -1; // Initialiser la variable $filiereIndex à une valeur valide

// for ($i = 0; $i < count($filiereArray); $i++) {
//     $filiere = $filiereArray[$i];
//     echo "Filière : " . $filiere->getLibelle() . PHP_EOL;

//     if ($i === $filiereIndex) {
//         echo "C'est la filière à laquelle ajouter l'étudiant" . PHP_EOL;
//         // Ajoutez votre code ici pour ajouter l'étudiant à la filière
//     }
// }






$etudiant1 = new Etudiant("Rashid", "Mohamed", "1995/01/02");
$etudiant2 = new Etudiant("Yves", "Chakib", "1992/04/02");
$etudiant3 = new Etudiant("ASAAD", "ASAAD", "2011/03/02");
$etudiant4 = new Etudiant("AIMANE", "AIMANE", "2000/11/02");
$etudiant5 = new Etudiant("KARIM", "KARIM", "2013/01/02");

$filiere1 = new Filiere($etudiant1, "AFT", "Informatique");
$filiere2 = new Filiere($etudiant2, "TIC", "Techno de l'informatique et de communication");
$filiere3 = new Filiere($etudiant3, "GENIEC", "Génie civil");
$filiere4 = new Filiere($etudiant4, "GENIEC", "Génie civil");
$filiere5 = new Filiere($etudiant5, "GENIEC", "Génie civil");

$filiereArray = array($filiere1, $filiere2, $filiere3, $filiere4, $filiere5);

// Ajouter un nouvel étudiant à une filière existante
$nouvelEtudiant = new Etudiant("AHMED", "AHMED", "1994/12/15");
$filiereIndex = 5; // Indice de la filière à laquelle ajouter l'étudiant

if (isset($filiereArray[$filiereIndex])) {
  $filiereArray[$filiereIndex]->getEtudiant($nouvelEtudiant);
} else {
  echo "La filière spécifiée n'existe pas.";
}

// Afficher les informations des filières et des étudiants
echo "La liste des filières de notre école :" . PHP_EOL;
foreach ($filiereArray as $filiere) {
  echo "Filière : " . $filiere->getLibelle() . PHP_EOL;
}

echo "Liste des étudiants par filière :" . PHP_EOL;
foreach ($filiereArray as $filiere) {

  echo "Filière : " . $filiere->getLibelle() . PHP_EOL;
  foreach ($filiere->getEtudiant() as $etudiant) {
    echo $etudiant->getNom() . " " . $etudiant->getPrenom() . PHP_EOL;
  }
  echo PHP_EOL;
}

$nbr = readline("combien d'etudiants:\n");
$dataEtud = array();

for ($i = 0; $i < $nbr; $i++) {
  $nom = readline("entrer le nom de l'etudiant:\n");
  $prenom = readline("entrer le prenom de l'etudiant:\n");
  $dateNaissance = readline("entrer la date de naissance:\n");
}

if ("Id" === "AFT") {
  echo "affiche mon tableau" . $dataEtud;
}




$dataEtud = new Etudiant($nom, $prenom, $dateNaissance);

$filiere = new Filiere($etudiant1, "AFT", "Informatique");


var_dump($dataEtud);
?>




?>