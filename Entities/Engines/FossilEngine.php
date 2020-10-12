<?php

namespace Entities\Engines;

use Entities\Engine;

class FossilEngine implements Engine{
    public function getEngineType () : string{
        return "Fossil";
    }
}