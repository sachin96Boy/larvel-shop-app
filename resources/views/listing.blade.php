@extends('layout')

@section('content')
    @include('partials._search')
    <h2 class="text-lg font-bold">{{ $listing->title }}</h2>
    <p class="text-sm">{{ $listing->description }}</p>
@endsection
