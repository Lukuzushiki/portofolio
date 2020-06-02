<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @stack('pretenn-style')
    @include('includes.style')
    @stack('addon-style')
</head>

<body>
    @include('includes.navbar')
    @include('includes.breadcumbs')
    @yield('content')
    @include('includes.footer')
    @stack('addon-script')
    @include('includes.script')
    @stack('pretenn-script')
</body>

</html>