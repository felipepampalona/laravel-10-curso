<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title') - {{ config('app.name') }}</title>
</head>
<body>
    <section class="container px-4 mx-auto">
        <header>
            @yield('header')
        </header>
        <div class="content">
            @yield('content')
        </div>
        <footer>

        </footer>
    </section>
</body>
</html>
