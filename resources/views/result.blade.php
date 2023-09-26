<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Results</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="w-fit mx-auto p-5 space-y-4 my-7 flex flex-col justify-center bg-pink-700 rounded-xl">
            @foreach ($results as $key => $result)
            <div class="space-y-1.5">
                <p class="font-bold text-pink-300">{{ ucwords($key) }}</p>
                <p class="w-full text-pink-300">{{ $result }}</p>

                @if ($key == 'image')
                <img class="mx-auto" src="{{ asset('storage/images/'.$result) }}" alt="Images">
                @endif
            </div>
            @endforeach

            @if (session('status'))
                <p class="w-full text-center px-3 py-2.5 rounded-md bg-mint font-bold text-pink-300">{{ session('status') }}</p>
            @endif
        </div>
    </body>
</html>
