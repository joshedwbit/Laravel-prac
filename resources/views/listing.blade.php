@extends('layout')
@section('content')
<img src="{{ asset('images/logo.png') }}"  alt="logo-image"/>

<h1>single listing</h1>
{{ $listing->id }}
{{ $listing->title }}
{{-- blade allows us to use twig syntax  --}}

<!-- usual logic can go here, i.e. foreach to pull from arrays  -->
@endsection