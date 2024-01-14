@props(['listing'])

<x-card>
<a href="/listings/{{$listing['id']}}">
    {{ $listing->title }}<br>
    {{ $listing->company }}<br>
</a>
<br>
</x-card>