<?PHP



include_once "point.class.php";
include_once "cercle.class.php";

$cercle = new Cercle(1,2,3);

$cercle->afficher();
echo "\n";
echo "Perimetre:".$cercle->getPerimetre();
echo "\n";
echo "Perimetre:".$cercle->getSurface();
echo "\n";

$point = new Point(2,3);
if ($cercle->appartient($point)) {
    echo "Le point appartient au cercle";
} else {
    echo "le point n'appartient pas au cercle";
}

?>