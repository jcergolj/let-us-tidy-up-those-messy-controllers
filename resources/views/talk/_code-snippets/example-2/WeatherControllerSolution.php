<?php

namespace App\Http\Controllers;

use App\DTO\CoordinatesDTO;
use App\DTO\WeatherDTO;
use App\ValueObjects\CoordinatesValueObject;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function __invoke()
    {
        $response = Http::get('https://api.city-to-coordinates.com/ljubljana');

        if (! $response->successful()) {
            return response()
                ->json(['error' => 'Failed to retrieve coordinates'], $response->status());
        }

        $coordinatesDTO = CoordinatesDTO::fromResponse($response);

        $coordinates = new CoordinatesValueObject($coordinatesDTO);

        $response = Http::get(
            "https://api.weather.com?lat={$coordinates->latitude}&lon={$coordinates->longitude}"
        );

        if (! $response->successful()) {
            return response()
                ->json(['error' => 'Failed to retrieve weather data.'], $response->status());
        }

        $weatherDTO = WeatherDTO::fromResponse($response);

        // do something with those values

        return response()->noContent();
    }
}
