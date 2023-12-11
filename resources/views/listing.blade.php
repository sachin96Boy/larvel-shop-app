@extends('layout')

@section('content')
    @include('partials._search')
    <div>
        <h2 class="text-lg font-bold">{{ $listing->title }}</h2>
        <p class="text-sm">{{ $listing->description }}</p>
        <p class="text-sm">{{ $listing->company }}</p>
        <p class="text-sm">{{ $listing->location }}</p>
        <p class="text-sm">{{ $listing->email }}</p>
        <hr>
        <x-listing-tags :tagsCSV='$listing->tags' />
    </div>
@endsection
