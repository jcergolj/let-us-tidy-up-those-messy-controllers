<?php

namespace App\DTO;

use App\Models\User;

class Dto
{
    public function __construct(public readonly User $user, public string $url)
    {
    }
}
