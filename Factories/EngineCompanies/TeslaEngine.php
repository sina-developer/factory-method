<?php

namespace Factories\EngineCompanies;

use Entities\Engine;
use Entities\Engines\ElectricalEngine;
use Factories\EngineFactory;

class TeslaEngine implements EngineFactory{
    public function buildEngine() : Engine{
        return new ElectricalEngine();
    }
}