<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <x-navigation-menu />

    <main class="py-5">
        <div class="container">
            {{ $slot }}
        </div>
    </main>

    @stack('scripts')
</body>

</html>
