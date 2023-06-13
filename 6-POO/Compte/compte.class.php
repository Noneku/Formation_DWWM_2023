<?php
    class Compte {
        private float $solde;
        private static int $code = 0;

        private Client $proprietaire;

        public function __construct($solde, $proprietaire){
            $this->solde = $solde;
            $this->proprietaire = $proprietaire;
            self::$code++;
        }

        public function crediter(float $somme) : void {
            //Fetch sum of account
            $solde = $this->getSolde();
            //Add this sum the new $somme
            $this->setSolde( $solde += $somme);
            
            echo "Votre compte à été créditer de  + $somme";
        }

        public function crediterCPT(float $somme, Compte $compte) : void{
            $oldSold = $this->getSolde();

            $mysolde = $this->getSolde();

            $mysolde -= $somme;
            $targetOldSold = $compte->getSolde();
            $targetSold = $compte->getSolde();
            $targetSold += $somme;

            echo "Transfère réussis !\n
                    Votre solde : \n
                    Avant -> $oldSold €\n
                    Apres -> $mysolde €\n
                    Le solde créditeur est de :\n
                    Avant -> $targetOldSold € \n
                    Apres -> $targetSold €
                    Pour un transfère de $somme € \n";
        }

        public function debiter(float $somme) : void {
             //Fetch the sum of current account
             $solde = $this->getSolde();
             //Add to the current sum, the new $somme
             $this->setSolde( $solde -= $somme);
             
             echo "Votre compte à été débiter de  - $somme";
        }

        public function debiterCPT(float $somme, Compte $compte) : void {

            $oldSold = $this->getSolde();

            $mysolde = $this->getSolde();

            $mysolde += $somme;
            $targetOldSold = $compte->getSolde();
            $targetSold = $compte->getSolde();
            $targetSold -= $somme;

            echo "Transfère réussis !\n
                    Votre solde : \n
                    Avant -> $oldSold €\n
                    Apres -> $mysolde €\n
                    Le solde débiteur est de :\n
                    Avant -> $targetOldSold € \n
                    Apres -> $targetSold €
                    Pour un transfère de $somme € \n";
        }
        
        public function affichage() : void{

            print "
            Compte numéro : " . self::$code . "\n
            Nom : " . $this->proprietaire->getNom() ."\n
            Prenom : " . $this->proprietaire->getPrenom() . "\n
            CIN : " . $this->proprietaire->getCin() . "\n
            Tel : " . $this->proprietaire->getTel() . "\n
            Solde : $this->solde";
        }

        /**
         * Get the value of solde
         */ 
        public function getSolde()
        {
                return $this->solde;
        }

        /**
         * Set the value of solde
         *
         * @return  self
         */ 
        public function setSolde($solde)
        {
                $this->solde = $solde;

                return $this;
        }

        /**
         * Get the value of code
         */ 
        public function getCode()
        {
                return self::$code;
        }

        /**
         * Set the value of code
         *
         * @return  self
         */ 
        public function setCode($code)
        {
                $this->code = $code;

                return $this;
        }

        /**
         * Get the value of proprietaire
         */ 
        public function getProprietaire()
        {
                return $this->proprietaire;
        }

        /**
         * Set the value of proprietaire
         *
         * @return  self
         */ 
        public function setProprietaire($proprietaire)
        {
                $this->proprietaire = $proprietaire;

                return $this;
        }
    }
?>