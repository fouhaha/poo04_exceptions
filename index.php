<?php

require_once 'Car.php';

$titine = new Car('purple', 5, 'fuel');
$titine->setNbWheels(3);

var_dump($titine);

try {
    echo($titine->start());
} catch(Exception $e){
    // code to manage exceptions
    echo "Exception received  : ". $e->getMessage() . "<br>";
    $titine->setParkBrake();
    echo "It works much better without the parking brake...<br>";
    echo($titine->start());
} finally {
    echo ("My car drives like a donut!<br>Hmmm donut<br>");
}

var_dump($titine);