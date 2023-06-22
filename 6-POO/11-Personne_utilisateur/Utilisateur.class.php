<?php

    class Utilisateur extends Personne {

        private Profil $profil;
        private string $login;
        private string $password;
        private string $service;
      
        public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $login, string $password, string $service, string $code, string $libelle) {
          parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
          $this->profil = new Profil($code , $libelle);
          $this->login = $login;
          $this->password = $password;
          $this->service = $service;
        }
        

        /**
         * @return string
         */ 
        public function getLogin(): string
        {
                return $this->login;
        }

        /**
         * @param string
         */ 
        public function setLogin(string $login)
        {
                $this->login = $login;

        }

        /**
         * @return string
         */ 
        public function getPassword(): string
        {
                return $this->password;
        }

        /**
         * @param string
         */ 
        public function setPassword(string $password)
        {
                $this->password = $password;

        }

        /**
         * @return string
         */ 
        public function getService(): string
        {
                return $this->service;
        }

        /**
         * @param string
         */ 
        public function setService($service)
        {
                $this->service = $service;

        }

         /**
    * Get the value of profil
    */ 
   public function getProfil()
   {
      return $this->profil;
   }

   /**
    * Set the value of profil
    *
    * @return  self
    */ 
   public function setProfil($profil)
   {
      $this->profil = $profil;

      return $this;
   }
   
        public function calculerSalaire() {
            // Augmentation de salaire pour les profils spécifiques
            if ($this->service === "Manager") {
              return parent::calculerSalaire() * 1.1;
            } elseif ($this->service === "Directeur général") {
              return parent::calculerSalaire() * 1.4;
            }
        
            return parent::calculerSalaire();
          }
        
          public function affiche() {
            parent::affiche();
            echo "Login: {$this->login}\n";
            echo "Service: {$this->service}\n";
          }
    }
?>