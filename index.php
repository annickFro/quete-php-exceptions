<?php
// index.php
require_once 'Car.php' ;

//define('RETOUR_A_LA_LIGNE', "<br>");
define('RETOUR_A_LA_LIGNE', "\n");

// cars ---------------------------

$car = new Car("Vert", 5, "SP98");
//var_dump($car) ;

echo $car->start() . RETOUR_A_LA_LIGNE;
echo $car->forward() . RETOUR_A_LA_LIGNE;
echo $car->brake() . RETOUR_A_LA_LIGNE;;

echo 'Frein à main' . $car->getHasParkBrake() . RETOUR_A_LA_LIGNE;
$car->setHasParkBrake(true);
echo 'Frein à main' . $car->getHasParkBrake() . RETOUR_A_LA_LIGNE;


try {
    echo $car->start() . RETOUR_A_LA_LIGNE;
} catch (Exception $e) {
    echo 'Exception received : ' . $e->getMessage() . PHP_EOL;
    $car->setHasParkBrake(false);
    echo $car->start() . RETOUR_A_LA_LIGNE;
} finally {
    
    echo "Ma voiture roule comme un donut" . RETOUR_A_LA_LIGNE ;
}