<?php
$a = readline("Entrer un nombre : ");

if ($a == 0) {
    echo "Ce nombre est null";
    # code...
}
elseif ($a > 0) {
    echo "Ce nombre est positif";
    # code...
}
elseif ($a < 0) {
    echo "Ce nombre est négatif";
    # code...
}

?>