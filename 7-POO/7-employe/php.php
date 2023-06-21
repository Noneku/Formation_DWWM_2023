<?php



class Personne{

private string $Nom;
private string $Prenom;
private string $dateNaissance;
private string $dateEmbauche;


function __construct($Nom,$Prenom,$dateNaissance,$dateEmbauche)
{
  $this->Nom = $Nom;
  $this->Prenom = $Prenom;
  $this->dateNaissance = $dateNaissance;  
  $this->dateEmbauche = $dateEmbauche;  
}

public function age() {
    $anneeNaissance = 1990;
    $anneeActuelle = date("Y");
    $age = $anneeActuelle - $anneeNaissance;
    
    return $age;
}
public function Anciennete(){
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


public function Affichage(){

echo "je m'appelle"." ". $this->getNom()." ".$this->getPrenom() . "et je suis embaucher depuis"." ".$this->getDateEmbauche();
    
}



}


$employe = new Personne("SAHLI","Asaad","04/08/1990","5/11/2012");
$employe->Affichage();
echo "\n et j'ai"." ".$employe->age();
echo "\n et j'ai"." ".$employe->Anciennete()." ". "d'enciennete";

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
     echo $i. ", Âge : " . $age . "\n";}

    
 

// echo "Âge : " . $age;








// if ($anciennete < 5) {
//     $nouveauSalaire *= 0.02; // Augmentation de 2%
// } elseif ($anciennete < 10) {
//     $nouveauSalaire *= 0.05; // Augmentation de 5%
// } else {
//     $nouveauSalaire *= 0.1; // Augmentation de 10%
// }

// return $nouveauSalaire;




?>