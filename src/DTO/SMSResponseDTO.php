<?php

namespace Ahmedhegazee\Releans\DTO;

use Ahmedhegazee\Releans\Contracts\DTOInterface;

class SMSResponseDTO implements DTOInterface
{

    public  static function fromJson(array $data): self
    {
        return new self;
    }
}