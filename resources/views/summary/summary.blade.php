@extends('layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

    <div class="right_col" role="main">
        @includeIf('summary/sub', ['summary' => $summary])
    </div>

@endsection
