@props(['file', 'id' => 'code-example', 'dataLine' => null, 'language'])

@php
    $code = Str::of(htmlspecialchars(file_get_contents(base_path($file))));
@endphp

<x-code
    id="code-example"
    language="{{ $language }}"
    dataLine="{{ $dataLine }}">{!!$code!!}</x-code>
