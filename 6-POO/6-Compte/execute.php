<?php

// include "compte.class.php";

include_once "client.class.php";
include_once "Compte.class.php";


$cin = "5,0,p,m,p,o,m,3";
$Nom = "adjal";
$Prenom  = "karim";
$Tel = "0320252523";

// instanciation 
$client1 = new Client ( "50pmpom3", "adjal", "karim", "03;20;25;25;23" );
 $client1->AfficherClient();

$solde = 2000;
$proprietaire = "adjal";

 $compte1 = new Compte ("50pmpom3", "adjal", "karim", "03;20;25;25;23" , 2000 );
//  appel de fonction
 $compte1->afficherResume();
 $compte1->afficherNombreComptes();





?>