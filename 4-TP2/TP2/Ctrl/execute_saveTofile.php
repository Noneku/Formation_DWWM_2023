<?php

include "../Modele/functions.php";
studentsToFile($studentList);
$tabAsso = shufflePositions($tabAsso);
print_r($tabAsso);


?>