<?php 
include("./client.class.php");
include("./compte.class.php");

//Create Account - Client

$client1 = new Client("512163AFGH", "Gacem", "Nassim", "062345871");
$compte1 = new Compte(1000, $client1);


$client2 = new Client("512454HGHGGH", "Levan", "Stay", "062124871");
$compte2 = new Compte(1000, $client2);

$client3 = new Client("51212346GGH", "Loli", "Kerp", "062874871");
$compte3 = new Compte(1000, $client3);

//Opération Lists

echo "\n\n";
$compte2->crediter(600);
$compte2->affichage();
$compte2->crediterCPT(300, $compte3);
// $compte2->debiter(100);
// echo "\n\n";
 $compte3->affichage();

?>
