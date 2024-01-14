<x-layout>
@include('partials._hero')
@include('partials._search')
<h1>single listing</h1>
{{ $listing->id }}
{{ $listing->title }}
{{-- blade allows us to use twig syntax  --}}

<!-- usual logic can go here, i.e. foreach to pull from arrays  -->
</x-layout>