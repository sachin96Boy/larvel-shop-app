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
</body>

</html>
