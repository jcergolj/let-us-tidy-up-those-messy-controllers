@extends('layouts.talk-app')

@section('content')
    <x-title>
        Pipeline pattern
    </x-title>

    <x-body>
        <x-p>
            The Pipeline pattern is a design pattern used to process data in a series of sequential stages or steps.
        </x-p>

        <x-ul>
            <li>it passes data from one class to another</li>
            <li>example: middleware in Laravel</li>
        </x-ul>

        <x-subtitle>Laravel example</x-subtitle>

        <x-code language="php">
            use Closure;
use App\Models\User;
use Illuminate\Support\Facades\Pipeline;

$user = Pipeline::send($user)
    ->through([
        function (User $user, Closure $next) {
            // ...

            return $next($user);
        },
        function (User $user, Closure $next) {
            // ...

            return $next($user);
        },
    ])
    ->then(fn (User $user) => $user);
        </x-code>
    </x-body>
@endsection
