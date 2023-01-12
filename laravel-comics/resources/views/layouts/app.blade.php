<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>app</title>
</head>
<body>
    <header>
        @include('components.header')
    </header>

    <main>
        <div class="sect1">
            @include('components.main-sect1')
        </div>

        <div class="sect2">
            @yield('main-content')
        </div>

        <div class="sect3">
            @include('components.main-sect3')
        </div>
    </main>

    <footer>

    </footer>
    
</body>
</html>