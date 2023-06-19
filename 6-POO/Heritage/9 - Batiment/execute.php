<?php
include_once "batiment.class.php";
include_once "maison.class.php";

$maison = new Maison("35 adresse",200,3);

$maison->__toString();