<?php

require("./autoload.php");

use Factories\Companies\PrideFactory;
use Factories\Companies\TeslaFactory;

$factory1 = new PrideFactory();
$factory2 = new TeslaFactory();

$car1 = $factory1->makeCar();
$car2 = $factory2->makeCar();

echo $car1->toString();
echo $car2->toString();