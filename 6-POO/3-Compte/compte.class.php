<?php
    class Compte {

        private float $solde;
        private int $code;
        private array $history = [];

        private static int $nbrCpt = 0;
        private Client $proprietaire;

        public function __construct($solde, $proprietaire){
            $this->solde = $solde;
            $this->proprietaire = $proprietaire;
            self::$nbrCpt++;
            $this->code = self::$nbrCpt;
        }

        //Allows to add money on the current account
        public function crediter(float $somme) : void {

            $solde = $this->getSolde();
            $this->setSolde( $solde += $somme);
            
            print "Votre compte à été crédité de  + $somme € \n";

            //Push this action to history
            array_push($this->history, "- Votre compte a été créditer de $somme € le " . date('l jS \of F Y à h:i:s A'));
        }

        
        public function debiter(float $somme) : void {
            
            $solde = $this->getSolde();
            $this->setSolde( $solde -= $somme);
            
            print "Votre compte à été débiter de  - $somme €";
            array_push($this->history, "- Débit d'un montant de $somme € le " . date('l jS \of F Y à h:i:s A'));
        }
        
        //Allows you to make a transfer from the current account to another account
        public function crediterCPT(float $somme, Compte $compte) : void {

            //Current Account
            $mysolde = $this->getSolde();
            $this->setSolde($mysolde -= $somme);

            //Target Account
            $targetSold = $compte->getSolde();
            $targetSold += $somme;

            print "Transfère réussis d'un montant de $somme €!\n\n";

            //Notification on current Account
            array_push($compte->history, "-* Vous avez reçu un virement du compte N° " . $this->getCode() . " appartenant à " . $compte->proprietaire->getNom() . " " . $compte->proprietaire->getPrenom() ." d'un montant de $somme €");
            
            array_push($this->history, "- Virement de $somme € vers le compte N° " . $compte->getCode() . " le " . date('l jS \of F Y à h:i:s A'));
        }

        //Withdraw money from current account balance
        public function debiterCPT(float $somme, Compte $compte) : void {

            //Current Account
            $mysolde = $this->getSolde();
            $this->setSolde($mysolde += $somme);

            //Target Account
            $targetSold = $compte->getSolde();
            $targetSold -= $somme;

            print "Débit réussis d'un montant de $somme € !\n";
            array_push($this->history, "- Virement de $somme € du compte" . $compte->getCode() . "vers votre compte courant le" . date('l jS \of F Y à h:i:s A'));

        }
        
        //Displays all account information
        public function affichage() : void{

            print "INFORMATIONS DU COMPTE\n\n
            Compte numéro : " . $this->code . "\n
            Nom : " . $this->proprietaire->getNom() ."\n
            Prenom : " . $this->proprietaire->getPrenom() . "\n
            CIN : " . $this->proprietaire->getCin() . "\n
            Tel : " . $this->proprietaire->getTel() . "\n
            Solde : $this->solde €\n\n";

            $this->displayHistoryAccount();
        }

        public function displayHistoryAccount() : void{
            print "HISTORIQUE\n\n";
            foreach ($this->history as $key => $value) {
                print $value . "\n\n";
            }
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
                 return $this->code;
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