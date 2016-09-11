<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="{{  URL::asset('css/style.css') }}">
    @yield('styles')
</head>
<body>
    @include('includes.header')
    <div class="main">
        @yield('content')
    </div>
</body>
</html>