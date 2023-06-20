<?php
include_once "personne.class.php";
include_once "manager.class.php";
include_once "developpeur.class.php";

$moi = new Manager("Dupond","sfd","fdve@gmail","17819",235140,"Franc");
$moi2 = new Developpeur("Dupond","sfd","fdve@gmail","17819",2341,"Franc");
echo $moi->afficher();
echo "\n";
$moi->calculerSalaire();
echo $moi->afficher();

