<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons/css/boxicons.min.css">
    <title>Header</title>
    @vite('resources/css/app.css')
</head>
<header>
    <div class="w-full mx-0">
        <div class="bg-[#A46F07] p-4"></div>
            <div class="bg-[#F4A100] p-4 px-16 flex flex-row justify-between items-center">
                <div>
                    <h1 class="font-sans text-4xl font-extrabold">.Subli</h1>
                </div>
                <div class="flex gap-4">
                    <input type="text" placeholder="Search Product ..." class="p-2 rounded-md w-64 text-xl drop-shadow-lg">
                    <i class='bx bx-search text-4xl'></i>
                </div>
            </div>
            <hr>
            <div class="flex justify-between items-center bg-[#F4A100] p-1 px-16">
               
                <div class="flex justify-center align-bottom">
                    <h2 class=" text-white font-bold text-xl">All Products</h2><i class='bx bx-chevron-down text text-xl text-white'></i>
                </div>

                <div class="flex items-center">
                <i class='bx bxs-cart text-5xl'></i>
                <i class='bx bxs-user-circle text-5xl m-0'></i>
                
                
                <i class='bx bx-chevron-down text-4xl ml-0'></i> 
                </div>
            </div>
    </div>
</header>
<body>
{{-- 
@foreach ($user as $user)
<h1 class="text-7xl">{{ $user['name'] }}</h1>
<h1 class="text-7xl">{{ $user['age'] }}</h1>
@if($user['age'] < 21)
    <p>Too young to have s*x</p>
@endif
<hr>

@endforeach --}}

<div>
    @yield('content')

</div>
</body>
</html>
