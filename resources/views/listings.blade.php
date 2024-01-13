<h1>listings</h1>
{{ $heading }}
@foreach ($listings as $listing)
<a href="/listings/{{$listing['id']}}">
    {{ $listing['id'] }}
</a>
@endforeach
{{-- blade allows us to use twig syntax  --}}

<!-- usual logic can go here, i.e. foreach to pull from arrays  -->