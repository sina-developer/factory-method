<?php

namespace Entities;
use Entities\Engine;

interface Car{
    public function getType() : string;

    public function getEngine() : Engine;

    public function toString() : string;
}