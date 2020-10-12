<?php 

namespace Factories;

use Entities\Car;
use Entities\Engine;

interface CarFactory{
    public function makeCar() : Car;
}