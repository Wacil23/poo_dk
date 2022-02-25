<?php 
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Vehicule.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once './KmToMiles/Speedometer.php';

$tornado = new Bicycle('blue', 1);

echo $tornado->forward();

$HomersCar = new Car('green', 4, 'electric');
echo $HomersCar->forward();
$Truck = new Truck('Yellow', 3, 'fuel', 100);

echo '<br> Vitesse du vélo : ' . $tornado->setCurrentSpeed . ' km/h' . '<br>';
echo $tornado->brake();
echo '<br> Vitesse du vélo : ' . $tornado->setCurrentSpeed . ' km/h' . '<br>';
echo $tornado->brake(). '<br>';
echo '<br>';
$tornado->setCurrentSpeed(100);
echo $tornado->switchOn();

echo $HomersCar->start(false);
echo $HomersCar->forward();
echo '<br> Vitesse de la voiture : ' . $HomersCar->setCurrentSpeed . 'km/h' . '<br>';
echo $HomersCar->brake();
echo '<br> Vitesse de la voiture : ' . $HomersCar->setCurrentSpeed . ' km/h' . '<br>';
echo $HomersCar->brake();
echo '<br>';
echo '<br>';
echo $HomersCar->switchOn();

$Truck->setStock(1000);
echo $Truck->in_filling();
echo '<br>';
echo $Truck->forward();
echo '<br> Vitesse du camion : ' . $Truck->setCurrentSpeed . 'km/h' . '<br>';
echo $Truck->brake();
echo '<br> Vitesse du camion : ' . $Truck->setCurrentSpeed . ' km/h' . '<br>';
echo $Truck->brake();


$motorWay = new MotorWay(4, 130);
$pedestrianWay = new PedestrianWay(1, 10);
$residentalWay = new ResidentalWay(2, 500);

echo '<br>';
echo Speedometer::kmToMiles(10) .' Miles';
echo '<br>';
echo Speedometer::milesToKm(10) . ' Kilomètres';
