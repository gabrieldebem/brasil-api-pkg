<?php

class Holidays extends BrasilApiConnection
{
    /**
     * List all holidays of a year.
     *
     * @param int $year
     * @return object|array
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function listYearHolidays(int $year): object|array
    {
        return $this->clientApi()
            ->get("/feriados/v1/{$year}")
            ->throw()
            ->object();
    }
}
