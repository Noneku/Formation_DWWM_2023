<?php
    class Personne {
        protected int $id;
        protected string $nom;
        protected string $prenom;
    
        public function __construct(int $id, string $nom, string $prenom) {
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
        }

        /**
         * Get the value of id
         */ 
        private function getId()
        {
                return $this->id;
        }

        

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }
        public function toString(): string {
            return "Je suis {$this->nom} {$this->prenom}";
        }
    }
?>
