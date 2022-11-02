<?php

namespace Ahmedhegazee\Releans\DataTransferObject;

use Ahmedhegazee\Releans\Contracts\DataTransferObject;

class SMSResponseDTO extends DataTransferObject
{

    public string $id;
    public string $region;
    public string $message;
    public string $to;
    public string $date_sent;
    public string $operator;
    public string $status;
    public string $price;
    public string $price_unit;
    public string $timezone;
}
