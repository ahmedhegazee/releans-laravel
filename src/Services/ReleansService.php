<?php

namespace Ahmedhegazee\Releans\Services;

use Ahmedhegazee\Releans\Actions\GetBalanceAction;
use Ahmedhegazee\Releans\Actions\SenderID\GetSenderIDAction;

class ReleansService
{
    public function getBalance()
    {
        return (new  GetBalanceAction())->execute();
    }
}