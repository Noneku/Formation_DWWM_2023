<?php
class Profil {

protected int $id;
private string $code;
private string $libelle;



public function __construct( $id, $code, $libelle)
    {
       
        $this->id = $id;
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




}













?>