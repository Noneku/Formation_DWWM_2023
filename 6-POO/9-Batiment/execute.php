<?php

include "./Batiment.class.php";
include "./Maison.class.php";


$bat = new Batiment ("3 allée des Iris, Catcity 5614", 125);
$maison1 = new Maison ("4 chemin des chats, Citycat 7415", 85, 3);

echo $bat;
echo $maison1;


?>