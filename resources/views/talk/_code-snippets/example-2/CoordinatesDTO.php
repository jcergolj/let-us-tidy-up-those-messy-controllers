<?php

namespace App\DTO;

use Illuminate\Http\Client\Response;

class CoordinatesDTO
{
    private function __construct(
        readonly public float $latitude,
        readonly public float $longitude,
    ) {
    }

    public static function fromResponse(Response $response): self
    {
        return new self(
            $response->json()['latitude'],
            $response->json()['longitude'],
        );
    }
}
