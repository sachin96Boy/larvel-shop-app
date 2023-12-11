@props(['listing'])

<a href="/listings/{{ $listing->id }}">
    <h2 class="text-lg font-bold">{{ $listing->title }}</h2>
</a>
<p class="text-sm">{{ $listing->description }}</p>
