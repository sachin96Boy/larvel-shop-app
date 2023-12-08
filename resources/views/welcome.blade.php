<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>

<body>
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
    <h1>{{ $heading }}</h1>


    {{-- @if (count($listings) == 0)
        <p>No listing found</p>
    @endif --}}

    @unless (count($listings) == 0)

        @foreach ($listings as $listing)
            <h2 class="text-lg font-bold">{{ $listing['title'] }}</h2>
            <p class="text-sm">{{ $listing['description'] }}</p>
        @endforeach
    @else
        <p>No listings Found</p>
    @endunless


    {{--  --}}
</body>

</html>
