<?php 

namespace Entities\Engines;

use Entities\Engine;

class ElectricalEngine implements Engine{
    public function getEngineType() : string {
        return "Electrical";
    }
}