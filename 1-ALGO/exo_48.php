<?PHP 

$t = array(5,4,3);
$nbMax = 0 ;

for ($i=0; $i < count($t); $i++) { 

    if ($t[$i] > $nbMax) {

        $nbMax = $t[$i];

    }
}

echo $nbMax 


?>


