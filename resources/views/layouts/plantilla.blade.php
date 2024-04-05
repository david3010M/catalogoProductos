<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <title>@yield('title')</title>
    <link rel="icon" href="/favicon.png" type="image/x-icon" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.menu')
    <div class="h-screen w-screen flex justify-center sm:pl-60">
        <div class="max-w-screen-lg w-full">
            <div class="p-4 flex justify-center">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
{{-- 
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p --}}
