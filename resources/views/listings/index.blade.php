@extends('layout')
@section('content')
@include('partials._hero')
<h1>listings</h1>
{{ $heading }}<br>
@foreach ($listings as $listing)
<x-listing-card :listing="$listing" />
@endforeach
{{-- blade allows us to use twig syntax  --}}

<!-- usual logic can go here, i.e. foreach to pull from arrays  -->

@endsection