<?php
    class Professeur extends Employe {
        private string $specialite;
    
        public function __construct(int $id, string $nom, string $prenom, float $salaire, string $specialite) {
            parent::__construct($id, $nom, $prenom, $salaire);
            $this->specialite = $specialite;
        }
    
        public function getSpecialite(): string {
            return $this->specialite;
        }
    
        public function toString(): string {
            return parent::toString() . ", ma spécialité est: {$this->specialite}";
        }
    }
?>