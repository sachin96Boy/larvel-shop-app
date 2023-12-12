<h1 class="text-3xl font-bold underline">
    Hello world!
</h1>
{{-- default php approach --}}
{{-- <h1><?php echo $heading; ?></h1>
    <?php
            foreach($listings as $listing):
          ?>
    <h2 class="text-lg font-bold"><?php echo $listing['title']; ?></h2>
    <p class="text-sm"><?php echo $listing['description']; ?></p>
    <?php endforeach; ?> --}}
{{--  --}}


{{-- using blade and its directives --}}
{{-- <h1>{{ $heading }}</h1> --}}


{{-- @if (count($listings) == 0)
        <p>No listing found</p>
    @endif --}}

<x-layout>
    @include('partials._hero')
    @include('partials._search')

    @unless (count($listings) == 0)
        @foreach ($listings as $listing)
            <x-listing-card :listing='$listing' />
        @endforeach
    @else
        <p>No listings Found</p>
    @endunless
</x-layout>
