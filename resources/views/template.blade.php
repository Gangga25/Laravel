<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}} - @yield('judul')</title>
</head>
<body>
    <header>
        <nav>
            <li><a href="/home1">Home</a></li>
            <li><a href="/about1">About</a></li>
        </nav>
    </header>

    @yield('content')

    <footer>
        <P>Copyright IK2 GG - 2024</P>
    </footer>
    
</body>
</html>