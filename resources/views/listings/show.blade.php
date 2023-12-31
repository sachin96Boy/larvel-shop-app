<x-layout>
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
    <div>
        <a href="/listings/{{$listing->id}}/edit">
            <p>Click here to go to EDIT</p>
        </a>
        <form method="POST" action="/listings/{{$listing->id}}">
            @csrf
            @method('DELETE')
            <button>DELETE</button>
        </form>
    </div>

</x-layout>
