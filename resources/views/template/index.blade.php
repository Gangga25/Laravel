<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('tittle')</title>
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>
    @include('template.navbar')

    @yield('content')

    @include('template.footer')

    <script src="/bootstrap-5.3.2-dist/js/bootstrap.bundle.js"></script>
</body>
</html>