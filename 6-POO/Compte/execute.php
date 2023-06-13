<?php 
include("./client.class.php");
include("./compte.class.php");

$client1 = new Client("512163AFGH", "Gacem", "Nassim", "062345871");
$compte1 = new Compte(1000, $client1);

echo($compte1->getCode());
$client2 = new Client("512454HGHGGH", "Prout", "Ventilo", "062124871");
$compte2 = new Compte(1000, $client2);

$client3 = new Client("51212346GGH", "Loli", "Kerp", "062874871");
$compte3 = new Compte(1000, $client3);

echo "\n\n";
$compte3->crediterCPT(300, $compte2);
$compte3->debiter(100);
$compte3->affichage();

?>
