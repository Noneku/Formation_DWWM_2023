<?php


class Utilisateur extends Personne
{
   private Profil $profil;
   private string $login;
   private string $password;
   private string $service;


   


   function __construct($nom , $prenom , $mail , $telephone , $login , $password , $service , $salaire , $code , $libelle)
    {
        parent::__construct($nom , $prenom , $mail , $telephone , $salaire);
        $this->profil = new Profil($code , $libelle);
        $this->login = $login;
        $this->password = $password;
        $this->service = $service; 

    }
    
//Augmentation du salaire en fonction du code de l'utilisateur
   public function calculerSalaire(){


         if( $this->profil->getCode()== "MN"){
            
            return $this->salaire += ($this->salaire * 10 )/ 100;
            
         }elseif($this->profil->getCode() == "DG"){
            
            return $this->salaire += ($this->salaire * 40 )/ 100;
         }
         return $this->salaire;
      }

      
  
      public function affiche(): void
      {
          echo "ID: " . $this->id . "\n";
          echo "Nom: " . $this->nom . "\n";
          echo "Prénom: " . $this->prenom . "\n";
          echo "E-mail: " . $this->mail . "\n";
          echo "Téléphone: " . $this->telephone . "\n";
          echo "Salaire: " . $this->salaire . "€ \n";


          echo "Salaire: " . $this->service ."\n";
         echo "Code: " . $this->profil->getCode() . "\n";
         echo "Libellé: " . $this->profil->getLibelle() . "\n";
      }

      
   




      /**
       * Get the value of login
       */ 
      public function getLogin()
   {
      return $this->login;
   }
   
   /**
    * Set the value of login
    *
    * @return  self
    */ 
    public function setLogin($login)
    {
       $this->login = $login;
       
       return $this;
      }
      
      /**
       * Get the value of password
       */ 
      public function getPassword()
      {
         return $this->password;
      }
      
      /**
       * Set the value of password
       *
       * @return  self
       */ 
      public function setPassword($password)
      {
         $this->password = $password;
         
      return $this;
   }
   
   /**
    * Get the value of service
    */ 
    public function getService()
    {
       return $this->service;
      }
      
      /**
       * Set the value of service
       *
       * @return  self
       */ 
      public function setService($service)
      {
         $this->service = $service;
         
         return $this;
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
   }