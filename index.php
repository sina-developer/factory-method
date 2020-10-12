<?php

require("./autoload.php");

use Factories\Companies\PrideFactory;
use Factories\EngineCompanies\TeslaEngine;
use Factories\EngineCompanies\SaipaEngine;


$factory = new PrideFactory();

// We Also Can Implement Engine Setup inside of CarFactories but I write this way to make some practice ;)
$engineFactory = new SaipaEngine();

$engine = $engineFactory->buildEngine();

$factory->setEngine($engine);

$car = $factory->makeCar();

echo $car->toString();