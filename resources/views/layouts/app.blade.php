<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris</title>
    @vite(['resources/css/input.css'])
</head>

<body>
    @include('partials.sideBar.index')
    <main>
        @yield('konten')
    </main>

</body>

</html>