<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function store(StoreUserRequest $request)
    {
        $attributes = $request->validated();

        User::create($attributes);

        return response()->noContent();
    }
}
