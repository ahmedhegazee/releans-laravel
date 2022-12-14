<?php

namespace Ahmedhegazee\Releans\Actions;

use Ahmedhegazee\Releans\Contracts\AbstractAction;
use Ahmedhegazee\Releans\DataTransferObject\BalanceDTO;

class GetBalanceAction extends AbstractAction
{

    public function execute(): BalanceDTO
    {
        $response = $this->client
            ->setUrl("balance")
            ->get()
            ->json();
        return new BalanceDTO($response);
    }
}
