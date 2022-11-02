<?php

namespace Ahmedhegazee\Releans\Reflection;

use Ahmedhegazee\Releans\Contracts\DataTransferObject;
use ReflectionProperty;

class DataTransferProperty
{

    public string $name;
    public function __construct(
        public DataTransferObject $dataTransferObject,
        public ReflectionProperty $reflectionProperty
    ) {
        $this->name = $this->reflectionProperty->getName();
    }
    /**
     * Undocumented function
     *
     * @param mixed $value
     * @return void
     */
    public function setValue(mixed $value): void
    {
        $this->reflectionProperty->setValue($this->dataTransferObject, $value);
    }
    public function getValue(): mixed
    {
        return $this->reflectionProperty->getValue($this->dataTransferObject);
    }

    public function getDefaultValue(): mixed
    {
        return $this->reflectionProperty->getDefaultValue();
    }
}