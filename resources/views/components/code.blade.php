@props(['id' => 'code-example', 'dataLine' => null, 'language'])

<pre id="{{ $id }}" @if($dataLine !== null) data-line="{{ $dataLine }}" @endif><code class="language-{{ $language }}">{!! $slot !!}</code></pre>
