<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons/css/boxicons.min.css">
    <title>SUBLI</title>
    @vite('resources/css/app.css')
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
    <script>
        function showSuccessModal() {
            document.getElementById('successModal').classList.remove('hidden');
        }
    </script>
</body>

</html>
