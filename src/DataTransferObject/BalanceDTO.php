<?php

namespace Ahmedhegazee\Releans\DataTransferObject;

use Ahmedhegazee\Releans\Contracts\DataTransferObject;

class BalanceDTO extends DataTransferObject
{

    public string $balance;
    public string $currency;
    public string $payment;
}
