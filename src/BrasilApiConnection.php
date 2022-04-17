<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\PendingRequest;

class BrasilApiConnection
{
    public string $baseUrl;

    public function __construct()
    {
        $this->baseUrl = 'https://brasilapi.com.br/api';
    }

    protected function clientApi(): PendingRequest
    {
        return Http::baseUrl($this->baseUrl);
    }
}
