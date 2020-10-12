<?php 

namespace Factories\Companies;

use Factories\Carfactory;
use Entities\Car;
use Entities\Engine;
use Entities\Cars\Pride;

class PrideFactory implements CarFactory{

    private $engine;

    public function setEngine(Engine $engine){
        $this->engine = $engine;
    }

    public function getEngine() : Engine{
        return $this->engine;
    }

    public function makeCar() : Car{
        // engine setup could be here if you want to make statice engine type for each car
        return new Pride($this->engine);
    }
}