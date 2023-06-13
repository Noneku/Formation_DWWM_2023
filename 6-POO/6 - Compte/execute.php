<?php 

include_once "client.class.php";
include_once "compte.class.php";

// $Moi = new Client("FR260","Chef","Bandit",644112351);
$Banque = new Compte("FR260","Chef","Bandit",644112351,100);

// $Moi2 = new Client("FR746","Flingue","Fruit",64416168);
$Banque2 = new Compte("FR746","Flingue","Fruit",64416168,1500);




echo "\n";
$Banque->Resume();
$Banque->crediter(1500);
$Banque2->crediter(1500);
$Banque->Resume();
$Banque->debiter(500);
$Banque->Resume();
$Banque->crediterCpt(500,$Banque2);
$Banque2->Resume();
echo $Banque->getCode();