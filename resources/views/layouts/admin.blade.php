<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title.' | '.config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Gerenciador de senhas feito com amor para você <3" />
    <link rel="icon" href="icone.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="h-screen flex">
        <!-- aside menu-->
        <section class="hidden md:block md:w-1/4 border-r border-gray-100 p-6">
            @include('admin.assets.aside')
        </section>


        <!-- conteudo -->
        <section class="w-full md:w-3/4 p-6">
            <!-- Navbar -->
            <header>
                @include('layouts.navigation')
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </section>
    </div>

    <footer>
        @include('admin.assets.footer')
    </footer>
</body>

</html>