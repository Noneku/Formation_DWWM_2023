<?php

include "client.class.php";
include "compte.class.php";



$client1 = new Compte(30000,"123456789", "Dupont", "Jean", "0123456789");
$client2 = new Compte(3000,"EE222322CC", "Kibutsuji" , "Muzan", "2334254789");




// var_dump($client);
// var_dump($client2);

$client1->crediter(10000);

$client1->afficherResume();

$client2->crediterCpt(3000 , $client1);

$client1->afficherResume();
$client2->afficherResume();


$client1->debiter(10000);

$client1->afficherResume();


$client1->debiterCpt(4000 , $client2);


$client2->afficherResume();
$client1->afficherResume();


Compte::afficherNombreComptes();

?>