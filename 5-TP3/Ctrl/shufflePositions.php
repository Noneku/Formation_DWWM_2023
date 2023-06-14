<?php

include ('../Modele/functions.php');

$_SESSION['$assoStudents'] = $assoStudents;

header("Location: ../views/affichage.php");

$assoStudents = shufflePositions($assoStudents);


?>