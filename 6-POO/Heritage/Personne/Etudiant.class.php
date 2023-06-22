<?php 

class Etudiant extends Personne {
private string $cne ;

public function __construct(string $cne, $id, $nom, $prenom) {
    parent::__construct($id, $nom, $prenom);
    $this->cne = $cne;
}

public function __toString()
{
    return parent::__toString() . ", sa carte: " . $this->cne ;
}


/**
 * Get the value of cne
 */ 
public function getCne()
{
return $this->cne;
}

/**
 * Set the value of cne
 *
 * @return  self
 */ 
public function setCne($cne)
{
$this->cne = $cne;

return $this;
}
}



?>