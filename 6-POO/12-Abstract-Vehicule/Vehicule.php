<?php

declare(strict_types=1);

namespace Vehicule;

abstract class Vehicule
{
    private string $matricule;

    private int $anneeModel;

    private float $prix;

    private static $cptMatricule = 0;

    public function __construct($matricule, $anneeModel, $prix)
    {
        $this->matricule = self::$cptMatricule++;
        $this->anneeModel = $anneeModel;
        $this->prix = $prix;
    }

     public abstract function demarrer();

     public abstract function accelerer();
        

    public function getMatricule() {
    	return $this->matricule;
    }

    /**
    * @param $matricule
    */
    public function setMatricule($matricule) {
    	$this->matricule = $matricule;
    }

    public function getAnneeModel() {
    	return $this->anneeModel;
    }

    /**
    * @param $anneeModel
    */
    public function setAnneeModel($anneeModel) {
    	$this->anneeModel = $anneeModel;
    }

    public function getPrix() {
    	return $this->prix;
    }

    /**
    * @param $prix
    */
    public function setPrix($prix) {
    	$this->prix = $prix;
    }

    /**
     * @return string
     */
    public function __toString() {
    	return "Matricule: {$this->matricule}, AnneeModel: {$this->anneeModel}, Prix: {$this->prix}";
    }
}
