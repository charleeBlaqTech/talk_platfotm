<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="grid place-items-center w-[100%] h-[100vh] bg-green-200">
    @include('includes._header')
    <div class="container w-[100%] flex justify-center align-middle">
        @yield('content')
    </div>
</body>
</html>
