<?php

class Fipe extends BrasilApiConnection
{
    /**
     * List all vehicles brands.
     *
     * @param string $vehiclesType
     * @return object|array
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function listVehiclesBrands(string $vehiclesType): object|array
    {
        return $this->clientApi()
            ->get("/fipe/marcas/v1/{$vehiclesType}")
            ->throw()
            ->object();
    }

    /**
     * Get a vehicle price.
     *
     * @param string $code
     * @return object|array
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function getVehiclePrice(string $code): object|array
    {
        return $this->clientApi()
            ->get("/fipe/preço/v1/{$code}")
            ->throw()
            ->object();
    }

    /**
     * List all available tables to consult a fipe price.
     *
     * @return object|array
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function listFipeTables(): object|array
    {
        return $this->clientApi()
            ->get("/fipe/tabelas/v1/")
            ->throw()
            ->object();
    }
}
