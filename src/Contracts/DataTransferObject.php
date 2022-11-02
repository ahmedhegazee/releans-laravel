<?php

namespace Ahmedhegazee\Releans\Contracts;

use Ahmedhegazee\Releans\Reflection\DataTransferClass;
use Illuminate\Support\Arr;
use ReflectionClass;
use ReflectionProperty;

abstract class DataTransferObject
{

    public function __construct(...$args)
    {
        //mutable from nova
        if (\is_array($args[0] ?? 0))
            $args = $args[0];
        $class = new DataTransferClass($this);
        foreach ($class->getProperties() as $property) {
            $property->setValue(Arr::get($args, $property->name, $property->getDefaultValue()));
            Arr::forget($args, $property->name);
        }
    }
}