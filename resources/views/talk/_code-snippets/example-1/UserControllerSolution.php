<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function register(StoreUserRequest $request)
    {
        $attributes = $request->validated();
        $attributes['password'] = bcrypt($request->password);

        User::create($attributes);

        return response()->noContent();
    }
}
