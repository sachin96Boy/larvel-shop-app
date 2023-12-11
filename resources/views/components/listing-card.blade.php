@props(['listing'])

<x-card>
    <a href="/listings/{{ $listing->id }}">
        <h2 class="text-lg font-bold">{{ $listing->title }}</h2>
    </a>
    <p class="text-sm">{{ $listing->description }}</p>
    <p class="text-sm">{{ $listing->company }}</p>
    <p class="text-sm">{{ $listing->location }}</p>
    <p class="text-sm">{{ $listing->website }}</p>
    <hr>
    <x-listing-tags :tagsCSV='$listing->tags' />
</x-card>
