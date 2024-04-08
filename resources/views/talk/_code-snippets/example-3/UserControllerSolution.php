<?php

namespace App\Http\Controllers;

use App\DTO\Dto;
use App\Models\User;
use App\Pipeline\AddAge;
use App\Pipeline\AddEmail;
use App\Pipeline\AddName;
use App\Pipeline\AddRole;
use App\Pipeline\FixUrlString;
use Illuminate\Support\Facades\Pipeline;

class UserController extends Controller
{
    public function __invoke(User $user)
    {
        $user = User::findOrFail($user->id);

        $dto = new Dto($user, 'https://example.com?');

        $url = Pipeline::send($dto)
            ->through([
                AddName::class,
                AddAge::class,
                AddEmail::class,
                AddRole::class,
                FixUrlString::class
            ])
            ->then(fn (Dto $dto) => $dto->url);

        // do something with the URL
    }
}
