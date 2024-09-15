<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
        <!-- Styles -->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
        </style> 

        <style>
            body {
                font-family: 'Roboto', sans-serif;
            }
        </style>
        @vite('resources/js/app.js')
    </head>
    <body class="max-w-[1920px] mx-auto">
        {{-- <div id="app" class="max-w-[1920px]"></div> --}}
        <script src="https://unpkg.com/vue3-google-map"></script>
        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('description');
        </script>
    </body>
</html>
