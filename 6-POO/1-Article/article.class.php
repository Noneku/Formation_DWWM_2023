<?php

    class Article {
        // Référence, Désignation, PrixHT, TauxTVA.
        private string $name;
        private int $reference;
        private string $désignation;
        private float $prixHT;
        private static $tauxTVA = 20;

        public function __construct(string $name,int $reference, string $désignation, float $prixHT)
        {       
                $this->name = $name;
                $this->reference = $reference;
                $this->désignation = $désignation;
                $this->prixHT = $prixHT;

        }

        
        function CalculerPrixTTC() :float {
                $result = $this->prixHT + ($this->prixHT * $this::$tauxTVA) / 100;

                return $result;
        }
        
        function afficherArticle() : void{
                echo "Nom : " . $this->getName() . "\n";
                echo "Reference : " . $this->getReference() . "\n";
                echo "Désignation : " . $this->getDésignation() . "\n";
                echo "Prix HT : " . $this->getPrixHT() . "€ \n";
                echo "Prix TTC : " . $this->CalculerPrixTTC() . "€ \n";
        }
        /**
         * Get the value of name
         *
         * @return string
         */
        public function getName(): string {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @param string $name
         *
         * @return self
         */
        public function setName(string $name): self {
                $this->name = $name;
                return $this;
        }

        /**
         * Get the value of reference
         */
        public function getReference() {
                return $this->reference;
        }

        /**
         * Set the value of reference
         */
        public function setReference($reference): self {
                $this->reference = $reference;
                return $this;
        }

        /**
         * Get the value of désignation
         */
        public function getDésignation() {
                return $this->désignation;
        }

        /**
         * Set the value of désignation
         */
        public function setDésignation($désignation): self {
                $this->désignation = $désignation;
                return $this;
        }

        /**
         * Get the value of prixHT
         */
        public function getPrixHT() {
                return $this->prixHT;
        }

        /**
         * Set the value of prixHT
         */
        public function setPrixHT($prixHT): self {
                $this->prixHT = $prixHT;
                return $this;
        }

        /**
         * Get the value of TauxTVA
         */
        public function gettauxTVA() {
                return $this->tauxTVA;
        }

        /**
         * Set the value of TauxTVA
         */
        public function settauxTVA($tauxTVA): self {
                $this->tauxTVA = $tauxTVA;
                return $this;
        }

    }


?>