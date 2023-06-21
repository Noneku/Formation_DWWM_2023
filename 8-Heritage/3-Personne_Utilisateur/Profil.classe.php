<?php
class Profil extends Utilisateur{

protected int $id;
private string $code;
private string $libelle;



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

/*• Chef de projet (CP),
• Manager (MN),
• Directeur de projet (DP),
• Directeur des ressources humaines (DRH),
• Directeur général (DG),*/

public function Affiche(){
    echo parent::Affiche();
    echo "Code: " . $this->code;echo PHP_EOL;
    echo "libelle: " . $this->libelle;echo PHP_EOL;

}
}














?>