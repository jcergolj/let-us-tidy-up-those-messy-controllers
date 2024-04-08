<?php

namespace App\Http\Controllers;

use App\Exceptions\InvalidCoordinates;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function __invoke()
    {
        $response = Http::get('https://api.city-to-coordinates.com/ljubljana');

        if ($response->successful()) {
            $data = $response->json();

            if (isset($data['latitude']) && isset($data['longitude'])) {
                $latitude = $data['latitude'];

                $longitude = $data['longitude'];

                if ($latitude < -90 || $latitude > 90 || $longitude < -180 || $longitude > 180) {
                    throw new InvalidCoordinates('Invalid latitude or longitude values');
                }
            } else {
                return response()->json(['error' => 'Latitude or Longitude values not found in response'], 400);
            }
        }

        if (! isset($latitude) || ! isset($longitude)) {
            return response()->json(['error' => 'Failed to retrieve coordinates'], 500);
        }

        $response = Http::get('https://api.weather.com?lat='.$latitude.'&lon='.$longitude);

        if ($response->successful()) {
            $data = $response->json();

            $temperature = $data['temperature'];
            $wind = $data['wind'];
            $humidity = $data['humidity'];
            $humidity = $data['pressure'];
            $humidity = $data['visibility'];

            // do something with those values

            return response()->noContent();
        }

        return response()->json(['error' => 'Failed to retrieve weather data'], $response->status());
    }
}
