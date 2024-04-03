<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <title>@yield('title')</title>
    <link rel="icon" href="favicon.png" type="image/x-icon" />
</head>

<body>
    @yield('content')
</body>

</html>
{{-- 
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p --}}
