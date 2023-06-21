<?php
include '../Functions/compte.php';
include '../Functions/client.php';

// $client = new client(152624859, 'Azaaouaj', 'Younes', +33635217263);
// $client2 = new client(152664488, 'Macron', 'Démission', +3375847896);
$you = new compte(152624859, 'Azaaouaj', 'Younes', +33635217263, 50000, 1);
$otherAccount = new compte(152664488, 'Macron', 'Démission', +3375847896, 50000, 2); 



$otherAccount->crediterCpt(1, $you); 
$you->getNombreCpt();
$you->debiterCpt(1, $otherAccount); 
$otherAccount->crediter(100);
$you->debiter(200);
print_r($you);
print_r($otherAccount);
?>


