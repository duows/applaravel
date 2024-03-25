<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <header>
        @include('layouts.header')
    </header>

    <aside>
        @include('layouts.sidebar')
    </aside>

    <main>
        <div>
            @yield('content')
        </div>
    </main>

    <footer>

    </footer>

    <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>