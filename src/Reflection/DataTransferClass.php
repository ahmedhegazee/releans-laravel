<?php

namespace Ahmedhegazee\Releans\Reflection;

use Ahmedhegazee\Releans\Contracts\DataTransferObject;
use ReflectionClass;
use ReflectionProperty;

class DataTransferClass
{

    private ReflectionClass $reflectionClass;
    public function __construct(private DataTransferObject $dataTransferObject)
    {
        $this->reflectionClass = new ReflectionClass($this->dataTransferObject);
    }
    /**
     * Undocumented function
     *
     * @return \Ahmedhegazee\Releans\Contracts\DataTransferProperty[]
     */
    public function getProperties(): array
    {
        $publicProperties = \array_filter(
            $this->reflectionClass
                ->getProperties(ReflectionProperty::IS_PUBLIC),
            fn ($property) => !$property->isStatic()
        );
        return \array_map(
            fn (ReflectionProperty $reflectionProperty) => new DataTransferProperty(
                $this->dataTransferObject,
                $reflectionProperty
            ),
            $publicProperties
        );
    }
}