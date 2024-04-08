<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __invoke(User $user)
    {
        $user = User::findOrFail($user->id);

        $url = 'https://example.com?';

        if ($user->name !== null) {
            $url .= "&name={$user->name}";
        }

        if ($user->age !== null && $user->age >= 18) {
            $url .= "&age={$user->age}";
            $url .= '&adulthood=1';
        }

        if ($user->age !== null && $user->age < 18) {
            $url .= "&age={$user->age}";
            $url .= '&adulthood=0';
        }

        if ($user->email !== null) {
            $url .= "&email={$user->email}";

            $domain = Str::of($user->email)->explode('@')[1];
            $url .= '&email_domain='.$domain;

            if ($domain === 'example.com') {
                $url .= '&trusted_domain=1';
            }
        }

        if ($user->role !== null) {
            $url .= "&role={$user->role}";
        } else {
            $url .= '&role=guest';
        }

        $url = Str::of($url)->replace('?&', '?')->__toString();

        // do something with the URL
    }
}
