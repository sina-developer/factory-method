<?php 

namespace Factories;

use Entities\Engine;

interface EngineFactory{
    public function buildEngine() : Engine;
}