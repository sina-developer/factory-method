<?php 

namespace Entities\Cars;

use Entities\Car;
use Entities\Engine;

class Tesla implements Car{

    private $engine;
    private $type = "Tesla Model X";

    public function __construct(Engine $engine){
        $this->engine = $engine;
    }

    public function toString() : string {
        return $this->type . " with " . $this->engine->getEngineType() . " Engine\n";
    }
}