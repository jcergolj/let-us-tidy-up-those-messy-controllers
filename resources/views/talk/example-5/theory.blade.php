@extends('layouts.talk-app')

@section('content')
    <x-title>
        State Pattern
    </x-title>

    <x-body>
        <x-p>
            The State Pattern is a behavioural design pattern that allows an object to change its behaviour when its internal state changes. <br/>
            The only way to change the state of an object is through transitions.
        </x-p>

        <img src="{{ asset('images/state-diagram.png') }}" loading="lazy" decoding="async" width="auto" height="600" class="m-auto" />
        <x-p class="flex justify-center">
            <div class="italic">
                source: https://www.codiwan.com/state-design-pattern-real-world-example-java
            </div>
        </x-p>

        <x-subtitle>
            When to use the State Pattern?
        </x-subtitle>

        <x-ul>
            <li>ideal for models with state or statuses</li>
            <li>pre-defined set of business requirements when transitioning from one state to another</li>
            <li>e.g. users/status: pending, confirmed, blocked</li>
            <li>e.g. orders/status: draft, pending, paid, dispatched, delivered</li>
            <li>e.g. posts/status: draft, submitted, approved, published</li>
        </x-ul>
    </x-body>
@endsection
