<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed', // first option
        ];
    }

    //second option
    protected function password(): Attribute
    {
        return Attribute::make(
            set: fn (string $password) => bcrypt($password),
        );
    }
}
