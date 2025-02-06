<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @isset ($data)
        <meta ref="data" name="data" value="{{ json_encode($data)}}">
        @endif
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
    <body style="background-color: #E5E5E5;">
        <div id="app" class="mx-11"></div>
    </body>
</html>
