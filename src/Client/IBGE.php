<?php

class IBGE extends BrasilApiConnection
{
    /**
     * List of districts from a state.
     *
     * @param string $uf
     * @return object|array
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function listDistrictsFromState(string $uf): object|array
    {
        return $this->clientApi()
            ->get("/ibge/municipios/v1/{$uf}")
            ->throw()
            ->object();
    }

    /**
     * List all states.
     *
     * @return object|array
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function listStates(): object|array
    {
        return $this->clientApi()
            ->get("/ibge/v1")
            ->throw()
            ->object();
    }

    /**
     * Show a states.
     *
     * @param int $ufId
     * @return object|array
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function showStates(int $ufId): object|array
    {
        return $this->clientApi()
            ->get("/ibge/v1/{$ufId}")
            ->throw()
            ->object();
    }
}
