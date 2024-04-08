@extends('layouts.talk-app')

@section('content')
    <x-title>
        Final thoughts abut state machines
    </x-title>

    <x-body>
        <x-subtitle>Usage</x-subtitle>
        <x-code language="php">
// e.g. inside a controller
$post = Post::find(1);
// dd($post->state); // 'draft'
$post->state()->requestReview('Joe Doe');
// dd($post->state); 'in_review'

$post->state()->requestReview('Joe Doe');
// Exception is thrown Invalid transition
        </x-code>

        <x-subtitle>Summary</x-subtitle>
        <x-ul>
            <li>ideal for models with states/statuses</li>
            <li>when there are clear set of rules when transitioning from state to state</li>
            <li>logic in one place</li>
            <li>reduces bugs</li>
            <li>easy to test</li>
        </x-ul>

        <x-subtitle>Credits & Source</x-subtitle>
        <x-p>
            Jake Bennett at Laracon US 2023 Nashville.<br/>
            <x-link href="https://youtu.be/1A1xFtlDyzU?si=2FMgxoq4WiwhcycT" target="_blank">
                https://youtu.be/1A1xFtlDyzU?si=2FMgxoq4WiwhcycT
            </x-link>
        </x-p>
    </x-body>
@endsection
