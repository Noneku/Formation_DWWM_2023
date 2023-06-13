<?php
$nb = 0;

for ($i = 0; $i < 5; $i++) {
    $a = readline("Entrer un nombre");
    if ($nb < $a) {
    $nb = $a; }
}
echo $nb;
?>