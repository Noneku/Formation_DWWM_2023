<?php

// Déclaration de la classe profil fille de la classe utilisateur
class Profil extends Utilisateur{

//Déclaration des variables 
protected int $id;
private string $code;
private string $libelle;

// construct avec paramêtre de la classe utilisteur et profil
public function __construct($nom,$prenom,$mail,$telephone,$salaire,$login,$password,$service,$code,$libelle)
{
    parent ::__construct($nom,$prenom,$mail,$telephone,$salaire,$login,$password,$service,$code,$libelle);
    $this->id = ++self::$count;
    $this->code = $code;
    $this->libelle = $libelle;
}

public function getCode()
{
return $this->code;
}

public function setCode($code)
{
$this->code = $code;

return $this;
}

public function getLibelle()
{
return $this->libelle;
}

public function setLibelle($libelle)
{
$this->libelle = $libelle;

return $this;
}

public function getId()
{
return $this->id;
}

public function setId($id)
{
$this->id = $id;

return $this;
}

// Profils 
/*• Chef de projet (CP),
• Manager (MN),
• Directeur de projet (DP),
• Directeur des ressources humaines (DRH),
• Directeur général (DG),*/

// Affichage
public function Affiche(){
    echo parent::Affiche();
    echo "Code: " . $this->code ."\n";
    echo "libelle: " . $this->libelle ."\n"; 

}
}