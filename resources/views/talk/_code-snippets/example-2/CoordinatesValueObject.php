<?php

namespace App\ValueObjects;

use App\DTO\CoordinatesDTO;
use App\Exceptions\InvalidCoordinates;

class CoordinatesValueObject
{
    /** @var float */
    public $latitude;

    /** @var float */
    public $longitude;

    public function __construct(public CoordinatesDTO $coordinatesDTO)
    {
        $this->validateLatitude();

        $this->validateLongitude();

        $this->latitude = $this->coordinatesDTO->latitude;

        $this->longitude = $this->coordinatesDTO->longitude;
    }

    protected function validateLatitude(): void
    {
        if ($this->coordinatesDTO->latitude < -90 || $this->coordinatesDTO->latitude > 90) {
            throw new InvalidCoordinates('Invalid latitude value');
        }
    }

    protected function validateLongitude(): void
    {
        if ($this->coordinatesDTO->longitude < -180 || $this->coordinatesDTO->latitude > 180) {
            throw new InvalidCoordinates('Invalid longitude value');
        }
    }

    public function distanceFromGreenwich(): float
    {
        return $this->coordinatesDTO->longitude - 0;
    }

    public function distanceFromEquator(): float
    {
        return $this->coordinatesDTO->latitude - 0;
    }

    public function isOnNorthernHemisphere(): bool
    {
        return $this->coordinatesDTO->latitude > 0;
    }

    // ...
}
