<?php
include "Compte.class.php";

$client1= new Client("EE1111","Deweireld","Nicolas","06679089");
$client2 = new Client("TTT479","Doe","John",'06060600');
$client3 = new Client("ll5959","Picsous","Balthazard","065603202");
// $client1->afficher();
// echo"\n";
// echo"\n";
// $client2 ->afficher();

$compte1=new Compte($client1);
$compte2=new Compte($client2);



$compte1->Crediter(5000);
// $compte1->afficherCompte($client1);
// echo"\n";
// echo"\n";
// $compte2->CrediterCpt($compte1,4000);
// echo"\n";
// echo"\n";
// $compte2->afficherCompte($client2);
// echo"\n";
// echo"\n";
// $compte1->afficherCompte($client1);

// $compte2->Debiter(200);
// $compte2->afficherCompte($client2);
echo"\n";
echo"\n";
$compte1->DebiterCpt($compte2,3000);
$compte1->afficherCompte($client1);
echo"\n";
echo"\n";
$compte2->afficherCompte($client2);
// echo"\n";
// echo"\n";
// $compte1->afficherCompte($client1);
$compte3=new Compte($client3);
echo"\n";
echo"\n";
$compte3->afficherCompte($client3);
?>