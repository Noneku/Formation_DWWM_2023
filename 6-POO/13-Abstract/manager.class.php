<?php


class Manager extends Personne
{

private string $service; 

public function __construct($service , $nom , $prenom , $mail , $telephone , $salaire )
{
    parent::__construct($nom , $prenom , $mail , $telephone , $salaire);
    $this->service = $service;
}


public function calculerSalaire(): float{
    return $this->salaire += ($this->salaire * 35 ) /100;
}

public function afficher(): void{
echo " Le salaire du manager ".$this->nom." ".$this->prenom." est ".$this->salaire." € , son service : ".$this->service."\n";

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