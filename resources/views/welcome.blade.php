<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com?plugins=forms"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">


        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-4">

            <div id="app">

                <div class="space-y-5">

                    <div>
                        <h1 class="font-bold text-indigo-700 text-xl">#1 Generowanie losowego koloru</h1>
                        <random-color></random-color>
                    </div>

                    <div>
                        <h1 class="font-bold text-indigo-700 text-xl">#2 Przesłanie przez POST dwóch liczb i zwrócenie wyniku w formacie json</h1>
                        <sum-calcucator></sum-calcucator>
                    </div>

                    <div>
                        <h1 class="font-bold text-indigo-700 text-xl">#3 Kretor wizytówki (blade)</h1>
                        <card-generator></card-generator>
                    </div>

            </div>

        </div>

    </body>
</html>
