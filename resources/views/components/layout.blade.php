<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
</head>

<body>
    
    <main class="container mx-auto">
        <h1>{{$title}}</h1>

        {{$slot}}
    </main>
</body>

</html>