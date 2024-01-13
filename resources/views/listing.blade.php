@extends('layout')
@section('content')
<h1>single listing</h1>
{{ $listing['id'] }}
{{-- blade allows us to use twig syntax  --}}

<!-- usual logic can go here, i.e. foreach to pull from arrays  -->
@endsection