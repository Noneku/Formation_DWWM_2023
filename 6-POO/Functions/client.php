<?php

class client{
    // Définition des attributs
    private int $cni;
    private string $nom;
    private string $prenom;
    private int $tel;
    
    // Définition d'un constructeur permettant d'initialiser tous les attributs
    public function __construct($cni, $nom, $prenom, $tel)
    {
        $this->cni = $cni;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
    }

    // Définir la méthode get et set permettant d'afficher ou modifier les informations du client 
    public function getCni()
    {
        return $this->cni;
    }
    public function setCni($cni)
    {
        $this->cni = $cni;
        return $this;
    }
 
    public function getNom()
    {
         return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getTel()
    {
        return $this->tel;
    }
    public function setTel($tel)
    {
        $this->tel = $tel;
        return $this;
    }
}
?>

