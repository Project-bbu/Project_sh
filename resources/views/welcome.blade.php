<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="app.css">

        <!-- Styles -->
        <link rel="{{asset('app.css')}}" href="stylesheet">
        @viteReactRefresh
        @vite(['resources/sass/app.scss' ,'resources/js/app.js'])
        @vite('resources/css/app.css')
       
      
    </head>
    <body class="">
        <div id="example"></div>
        <h1 class="text-3xl font-bold underline">
            Hello world!
          </h1>
      
    </body>
</html>
