<?php

class Cnpj extends BrasilApiConnection
{
    /**
     * Get company details by the document.
     *
     * @param string $document
     * @return object|array
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function getCompanyDetails(string $document): object|array
    {
        return $this->clientApi()
            ->get("/cnpj/v1/{$document}")
            ->throw()
            ->object();
    }
}
