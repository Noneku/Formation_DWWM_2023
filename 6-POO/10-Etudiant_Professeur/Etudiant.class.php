<?php
    class Etudiant extends Personne {
        private string $CNE;
    
        public function __construct(int $id, string $nom, string $prenom, string $CNE) {
            parent::__construct($id, $nom, $prenom);
            $this->CNE = $CNE;
        }
    
        public function getCNE(): string {
            return $this->CNE;
        }
    
        public function toString(): string {
            return parent::toString() . ", mon CNE est: {$this->CNE}";
        }
    }
?>