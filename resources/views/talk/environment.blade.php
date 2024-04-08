@extends('layouts.talk-app')

@section('content-center')
    <x-title>
        How this presentation is made
    </x-title>

    <x-body>
        <x-ul>
            <li>Laravel</li>
            <li>Hotwire -> framework agnostic for mimic SPA like web apps</li>
            <li>composer require hotwired-laravel/turbo-breeze:1.0.0-beta17 --dev</li>
            <li>php artisan turbo-breeze:install turbo</li>
        </x-ul>
        <x-p class="flex justify-center">
            <x-link href="https://github.com/jcergolj/let-us-tidy-up-those-messy-controllers">
                https://github.com/jcergolj/let-us-tidy-up-those-messy-controllers
            </x-link>
        </x-p>
        <x-p class="flex justify-center">
            <x-link href="https://let-us-tidy-up-those-messy-controllers.jcergolj.me.uk">
                https://let-us-tidy-up-those-messy-controllers.jcergolj.me.uk
            </x-link>
        </x-p>
    </x-body>
@endsection
