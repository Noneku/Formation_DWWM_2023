<?php


class Utilisateur extends Personne
{

   private string $login;
   private string $password;
   private string $service;


    private static $nb; 


    function __construct($nom , $prenom , $mail , $telephone , $login , $password , $service)
    {
        parent::__construct($nom , $prenom , $mail , $telephone);
        $this->login = $login;
        $this->password = $password;
        $this->service = $service; 

    }

    public function calculerSalaire(){

    if($this->service == "MN"){

        return $this->salaire += ($this->salaire * 10 )/ 100;

    }elseif($this->service == "DG"){

        return $this->salaire += ($this->salaire * 40 )/ 100;
    }

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
    }