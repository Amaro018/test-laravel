<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body class="bg-[#E9EEF1]">
    <div>
        <header>
            @include('layout.Header.header')
        </header>
    </div>

    <div class="py-4">
        @yield('content')
    </div>

    <div>
        <footer>
            @include('layout.Footer.footer')
        </footer>
    </div>
</body>

</html>
