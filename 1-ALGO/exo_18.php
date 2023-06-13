<?php

$age = readline("Entrer votre age");

if ($age >= 12) {
    echo "Cadet";
} else if ($age > 9 && $age < 12) {
    echo "Minime";
} else if ($age > 7 && $age < 10) {
    echo "Pupille";
} else if ($age > 5 && $age < 8) {
    echo "Poussin";
}

?>
