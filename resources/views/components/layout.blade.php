<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laragigs</title>
</head>

<body>
    @auth
        <div class="row">
            <span>welcome {{ auth()->user()->name }}</span>
            <a href="/listings/manage">manage listings</a>
            {{-- logout --}}
            {{-- it's add as a form to reger a request --}}
            <form class="inline" method="POST" action="/logout">
                @csrf
                <button type="submit">
                    logout
                </button>
            </form>
        </div>
    @else
        <div class="row">
            <a href="/login">login</a>
            <a href="/register">register</a>
        </div>
    @endauth
    <h1>Laragigs</h1>
    {{-- view output --}}

    {{-- insted on using yield and using like that
        add a $slot and add relevent sections as child elements
        so this will act as a parent wrapper --}}
    {{-- @yield('content') --}}
    {{ $slot }}

    <div>
        <a href="/listings/create">
            <p>go to form</p>
        </a>
    </div>

    <x-flash-message />
</body>

</html>
