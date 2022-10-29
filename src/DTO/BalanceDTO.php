<?php

namespace Ahmedhegazee\Releans\DTO;

use Ahmedhegazee\Releans\Contracts\DTOInterface;

class BalanceDTO implements DTOInterface
{

    public function __construct(public string $balance, public string $currency, public string $payment)
    {
    }
    public static function fromJson(array $data): self
    {

        return new BalanceDTO(
            balance: $data['balance'],
            currency: $data['currency'],
            payment: $data['payment'],
        );
    }
}