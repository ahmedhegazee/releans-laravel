<?php

namespace Ahmedhegazee\Releans\DataTransferObject;

use Ahmedhegazee\Releans\Contracts\DataTransferObject;

class SingleSMSDTO extends DataTransferObject
{
    public string $phone;
    public string $message;
}
