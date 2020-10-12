<?php 

namespace Factories\Companies;

use Factories\Carfactory;
use Entities\Car;
use Entities\Engine;
use Entities\Engines\FossilEngine;
use Entities\Cars\Pride;

class PrideFactory implements CarFactory{
    public function makeCar() : Car{
        return new Pride(new FossilEngine());
    }
}