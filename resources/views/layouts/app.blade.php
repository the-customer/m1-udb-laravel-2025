<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title",'Online-Courses')</title>
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 text-gray-900">
    @include('layouts.partials.header')

    <div class="container mx-auto mt-8 px-10">
        @yield('content')
    </div>

    @include('layouts.partials.footer')
</body>
</html>
