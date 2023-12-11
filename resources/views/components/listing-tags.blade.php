{{-- here props will be a coma seperated string --}}
@props(['tagsCSV'])

@php
    // split string by comma
    $tags = explode(',', $tagsCSV);
@endphp

<ul class="flex">
    @foreach ($tags as $tag)
        <li class="flex items-center justify-center p-2 rounded m-2 bg-slate-400">
            {{ $tag }}
        </li>
    @endforeach
</ul>
