<?php

class Cep extends BrasilApiConnection
{
    /**
     * Find address by the Cep.
     *
     * @param string $cep
     * @return object|array
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function findAddress(string $cep): object|array
    {
        return $this->clientApi()
            ->get("/cep/v2/{$cep}")
            ->throw()
            ->object();
    }
}
