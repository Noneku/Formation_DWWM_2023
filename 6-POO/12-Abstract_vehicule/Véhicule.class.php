<?php
    abstract class Vehicule {
        private static $matriculeIncrement = 0;
        private $matricule;
        private $modeleAnnee;
        private $prix;
    
        public function __construct($modeleAnnee, $prix) {
            $this->matricule = self::$matriculeIncrement++;
            $this->modeleAnnee = $modeleAnnee;
            $this->prix = $prix;
        }
    
        
    
        public function __toString() {
            return "Matricule: {$this->matricule}, Année du modèle: {$this->modeleAnnee}, Prix: {$this->prix}";
        }
    
        abstract public function demarrer();
    
        abstract public function accelerer();

        /**
         * Get the value of matricule
         */ 
        public function getMatricule()
        {
                return $this->matricule;
        }

        /**
         * Get the value of modeleAnnee
         */ 
        public function getModeleAnnee()
        {
                return $this->modeleAnnee;
        }

        /**
         * Set the value of modeleAnnee
         *
         * @return  self
         */ 
        public function setModeleAnnee($modeleAnnee)
        {
                $this->modeleAnnee = $modeleAnnee;

                return $this;
        }

        /**
         * Get the value of prix
         */ 
        public function getPrix()
        {
                return $this->prix;
        }

        /**
         * Set the value of prix
         *
         * @return  self
         */ 
        public function setPrix($prix)
        {
                $this->prix = $prix;

                return $this;
        }
    }
    
?>