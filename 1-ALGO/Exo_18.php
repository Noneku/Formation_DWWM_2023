<?php


// Variables
$a = readline( "Donner l'age de vôtre enfant: ");

// Instruction
if ( $a <= 7) {
    echo "Vôtre enfant est un Poussin";
    # code...
}
elseif ( $a <= 9) {
    echo "Vôtre enfant est un Pupille";
    # code...
}
elseif ( $a <= 11) {
    echo "Vôtre enfant est un Minime";
    # code...
}
elseif ($a >= 11) {
    echo "Vôtre enfant est un cadet";
    # code...
}

?>