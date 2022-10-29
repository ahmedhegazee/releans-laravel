<?php

namespace Ahmedhegazee\Releans\DTO;

use Ahmedhegazee\Releans\Contracts\DTOInterface;

class SingleSMSDTO implements DTOInterface
{
    public  static function fromJson(array $data): self
    {
        return new self(
            phone: $data['phone'],
            message: $data['message'],
        );
    }
    public function __construct(public string $phone, public string $message)
    {
    }
}