<?php


include('./Personne.php');

class Etudiant extends Personne
{
    private string $cne;

    function __construct(string $nom, string $prenom, string $cne) {
        parent::__construct($nom, $prenom);
    	$this->cne = $cne;
    
    }

    /**
    * @return string
    */
    public function getCne(): string {
    	return $this->cne;
    }

    /**
    * @param string $cne
    */
    public function setCne(string $cne): void {
    	$this->cne = $cne;
    }

    /**
    * @return string
    */
    public function __toString(): string {
    	return "Cne: {$this->cne}";
    }
}
