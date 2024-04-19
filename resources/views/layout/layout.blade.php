<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons/css/boxicons.min.css">

    <title>SUBLI</title>
</head>

<body class="bg-[#E9EEF1]">

    <header>
        @include('layout.Header.header')
        @include('shared.success-message')
    </header>
    <div>

    </div>

    <div class="py-4">
        @yield('content')
    </div>


    <footer>
        @include('layout.Footer.footer')
    </footer>

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
