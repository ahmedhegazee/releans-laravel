<?php

namespace Ahmedhegazee\Releans\Contracts;

use Ahmedhegazee\Releans\Services\ClientService;

abstract class AbstractAction
{
    protected ClientService $client;
    public function __construct()
    {
        $this->client = new ClientService;
    }
    public abstract function execute();
}