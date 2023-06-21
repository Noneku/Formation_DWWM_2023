<?php
require_once 'compte.class.php';
$solde =0;

   /*****************************Compte*1********************************/
    $compte1 = new Compte("254541514" , "Mario ", "Bros ", "0723789584", 5000 );
    $compte1->crediter(1000);

    echo "solde compte 1 = " .$compte1->getSolde() . "\n";
    echo "nom  = " .$compte1->nom(). "\n"; 
    echo "Prenom  = " .$compte1->Prenom(). "\n"; 
    echo "Telephone  = " .$compte1->Telephone(). "\n"; 
    echo "CIN  = " .$compte1->CIN(). "\n"; 

    /*****************************Compte*2********************************/
    $compte2 = new Compte("458715180" , "Wario ", "Bros ", "0723999587", 5000 );

    $compte2->crediter(2500);

    echo "\n";
    echo "solde compte 2 = " .$compte2->getSolde(). "\n"; 
    echo "nom  = " .$compte2->nom(). "\n";
    echo "Prenom  = " .$compte2->Prenom(). "\n";
    echo "Telephone  = " .$compte2->Telephone(). "\n";
    echo "CIN  = " .$compte2->CIN(). "\n";




?>