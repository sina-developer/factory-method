<?php 

namespace Factories\Companies;

use Factories\Carfactory;
use Entities\Car;
use Entities\Engine;
use Entities\Engines\ElectricalEngine;
use Entities\Cars\Tesla;

class TeslaFactory implements CarFactory{
    public function makeCar() : Car{
        return new Tesla(new ElectricalEngine());
    }
}