<?php
    class Personne {
    
        protected int $id;
        protected string $nom;
        protected string $prenom;
        protected string $mail;
        protected string $telephone;
        protected float $salaire;

        private static int $nb = 0;
      
        public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire) {
          $this->id = self::$nb++;
          $this->nom = $nom;
          $this->prenom = $prenom;
          $this->mail = $mail;
          $this->telephone = $telephone;
          $this->salaire = $salaire;
        }

        public function calculerSalaire() {
          return $this->salaire;
        }
      
        public function affiche() {
          echo "ID: {$this->id}\n";
          echo "Nom: {$this->nom}\n";
          echo "Prénom: {$this->prenom}\n";
          echo "Mail: {$this->mail}\n";
          echo "Téléphone: {$this->telephone}\n";
          echo "Salaire: {$this->salaire} €\n";
        }

        /**
         * @return int
         */ 
        public function getNb(): int
        {
                return self::$nb;
        }

         /**
         * Set the value of nb
         *
         * @return  self
         */ 
        public function setNb(int $newNb): self {
            self::$nb = $newNb;
            return $this;
    }
    }

?>