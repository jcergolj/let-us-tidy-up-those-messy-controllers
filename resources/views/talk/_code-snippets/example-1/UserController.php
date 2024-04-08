<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Create User
        $user = new User();
        $user->name = Str::of($request->name)->ucwords()->_toString(); // seriously??
        $user->email = Str::of($request->email)->lower()->_toString(); // :)
        $user->password = bcrypt($request->password); // please do this in the model
        $user->role = $request->role === null ? 'user' : $request->role; // surly we can do better
        $user->save();

        return response()->noContent();
    }
}
