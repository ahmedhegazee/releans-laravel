<?php

namespace Ahmedhegazee\Releans\Actions;

use Ahmedhegazee\Releans\Contracts\AbstractAction;
use Ahmedhegazee\Releans\DataTransferObject\BalanceDTO;

class SendSingleSMSAction extends AbstractAction
{
    public function __construct(private string $phoneNumber)
    {
    }
    public  function execute()
    {
        $response = $this->client
            ->setUrl("message")
            ->post($this->format())
            ->json();
        return new BalanceDTO($response);
    }
    private function format(): string
    {
        return "sender=" . config('releans.sender_id') . "&mobile=" . $this->phone . "&content=Hello";
    }
}
