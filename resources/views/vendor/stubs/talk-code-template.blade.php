@extends('layouts.talk-app')

@section('content')
<x-code id="code-example" language="php" highlightFrom="1" highlightTo="1">
echo 213;
</x-code>

<x-code-from-file language="php" highlightFrom="1" highlightTo="1" file="routes/web.php" />

@endsection
