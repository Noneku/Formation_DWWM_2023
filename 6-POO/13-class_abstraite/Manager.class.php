<?php
class Manager extends Personne
{

    private string $service;

    public function __construct($nom,$prenom,$mail,$telephone,$salaire,$service)
    {
        parent::__construct($nom,$prenom,$mail,$telephone,$salaire);
        $this->service = $service;
    }



    public function Afficher()
    {
        echo "le salaire du manager".$this->nom." ".$this->prenom." est : ".$this->salaire."€, son service : ".$this->service.".";
    }
    


    public function calculerSalaire()
    {
        return $this->salaire*=1.35;
    
    }


    /**
     * Get the value of service
     */ 
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */ 
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }
}
?>