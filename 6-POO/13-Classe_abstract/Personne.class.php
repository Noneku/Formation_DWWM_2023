<?php
    abstract class Personne {
        protected int $id;
        protected string $nom;
        protected string $prenom;
        protected string $mail;
        protected string $telephone;
        protected float $salaire;
        protected static $counter = 0;
    
        public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire) {
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->mail = $mail;
            $this->telephone = $telephone;
            $this->salaire = $salaire;
            self::$counter++;
        }
    
        abstract public function calculerSalaire();
    }
?>