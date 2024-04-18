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
        function toggleDropdown() {
            var dropdownMenu = document.getElementById('dropdownMenu');
            if (dropdownMenu.classList.contains('hidden')) {
                dropdownMenu.classList.remove('hidden');
            } else {
                dropdownMenu.classList.add('hidden');
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const successAlert = document.getElementById('successAlert');
            if (successAlert) {
                setTimeout(() => {
                    successAlert.style.opacity = 0;
                    setTimeout(() => {
                        successAlert.remove();
                    }, 500); // Wait another 500ms for the fade out effect before removing
                }, 2000); // Show alert for 2000ms before fading out
            }
        });
    </script>

</body>

</html>
