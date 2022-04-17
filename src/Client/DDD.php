<?php

class DDD extends BrasilApiConnection
{
    /**
     * List all districts from a ddd.
     *
     * @param int $ddd
     * @return object|array
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function listDDDDistricts(int $ddd): object|array
    {
        return $this->clientApi()
            ->get("/ddd/v1/{$ddd}")
            ->throw()
            ->object();
    }
}
