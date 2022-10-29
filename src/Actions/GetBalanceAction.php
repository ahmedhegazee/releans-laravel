<?php

namespace Ahmedhegazee\Releans\Actions;

use Ahmedhegazee\Releans\Contracts\AbstractAction;
use Ahmedhegazee\Releans\DTO\BalanceDTO;

class GetBalanceAction extends AbstractAction
{

    public function execute(): BalanceDTO
    {
        $response = $this->client
            ->setUrl("balance")
            ->get()
            ->json();
        return BalanceDTO::fromJson($response);
    }
}