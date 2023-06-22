<?php
    class Employe extends Personne {
        protected float $salaire;
    
        public function __construct(int $id, string $nom, string $prenom, float $salaire) {
            parent::__construct($id, $nom, $prenom);
            $this->salaire = $salaire;
        }
    
        public function getSalaire(): float {
            return $this->salaire;
        }
    
        public function toString(): string {
            return parent::toString() . ", mon salaire est: {$this->salaire} €";
        }
    }
?>