<?php
$i = rand(0, 100);
$comparison_result = $i <=> 50; 

switch ($comparison_result) {
    case 1:
        echo "$i est plus grand que 50";
        echo PHP_EOL;
        break;
    case -1:
        echo "$i est plus petit que 50";
        echo PHP_EOL;
        break;
    case 0:
        echo "$i est égal à 50";
        echo PHP_EOL;
        break;
}