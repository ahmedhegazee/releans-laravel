<?php

namespace Ahmedhegazee\Releans\Contracts;

interface DTOInterface
{
    public  static function fromJson(array $data): self;
}