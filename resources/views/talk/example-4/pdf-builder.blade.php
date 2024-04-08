@extends('layouts.talk-app')

@section('content')
    <x-title>
        Example 4: Pdf builder pattern
    </x-title>

    <x-body>
        <x-code-from-file
            language="php" file="resources/views/talk/_code-snippets/example-4/PdfBuilder.php"
        />

<x-subtitle>Usage</x-subtitle>
        <x-code language="php">
        // e.g. inside a controller
$fullPayload = (new FullReportPdfBuilder($request)->build());

$pdfGenerator = (new PdfGenerator())->generate($fullPayload);

$basicPayload = (new BasicReportPdfBuilder($request)->build())

$pdfGenerator = (new PdfGenerator())->generate($basicPayload);
        </x-code>
    </x-body>
@endsection
