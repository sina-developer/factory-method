<?php 

namespace Entities\Cars;

use Entities\Car;
use Entities\Engine;

class Pride implements Car{

    private $engine;
    private $type = "Pride 131";

    public function __construct(Engine $engine){
        $this->engine = $engine;
    }

    public function getType() : string {
        return $this->type;
    }

    public function getEngine() : Engine{
        return $this->engine;
    }

    public function toString() : string {
        return $this->type . " with " . $this->engine->getEngineType() . " Engine";
    }
}