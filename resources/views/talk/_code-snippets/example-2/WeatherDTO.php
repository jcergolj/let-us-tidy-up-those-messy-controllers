<?php

namespace App\DTO;

use Illuminate\Http\Client\Response;

class WeatherDTO
{
    private function __construct(
        readonly public float $temperature,
        readonly public float $wind,
        readonly public float $humidity,
        readonly public float $pressure,
        readonly public float $visibility,
    ) {
    }

    public static function fromResponse(Response $response): self
    {
        return new self(
            $response->json()['temperature'],
            $response->json()['wind'],
            $response->json()['humidity'],
            $response->json()['pressure'],
            $response->json()['visibility']
        );
    }
}
