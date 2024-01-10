<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="grid place-items-center w-[100%] h-full bg-green-200 px-4 pt-14">
    @include('includes._header')
    <main class="w-[100%] grid place-items-center ">
        @yield('content')
    </main>
</body>
</html>