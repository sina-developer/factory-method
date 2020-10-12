<?php

namespace Factories\EngineCompanies;

use Entities\Engine;
use Entities\Engines\FossilEngine;
use Factories\EngineFactory;

class SaipaEngine implements EngineFactory{
    public function buildEngine() : Engine{
        return new FossilEngine();
    }
}