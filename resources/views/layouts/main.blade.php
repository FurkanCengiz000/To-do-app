<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-do App</title>
    @include('partials.styles')
</head>

<body>

    @include('partials.header')

    <main style="height: 100vh" class="container-fluid mt-3 px-5">
        @yield('content')
    </main>

    @include('partials.footer')

    @include('partials.scripts')

</body>

</html>
