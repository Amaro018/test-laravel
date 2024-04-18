<header>
    <div class="w-full mx-0">
        {{-- authentication of user --}}
        {{-- @if () --}}
        @include('layout.Header.Navigation.navigation')
        {{-- @endif --}}

        {{-- logo --}}
        <div class="bg-[#6FB3B8] p-4 px-16 flex flex-row justify-between items-center">
            <div>
                <a href="{{route('homepage')}}">
                    <h1 class="font-sans text-4xl font-extrabold">.Subli</h1>
                </a>
            </div>
            {{-- search bar --}}
            <div class="container flex flex-row justify-center items-center">
                <input type="text" placeholder="Search Product ..."
                    class="p-2 rounded-l-md w-3/6 text-md drop-shadow-lg">
                <i class='bx bx-search text-4xl rounded-r-md bg-white'></i>
            </div>
            {{-- cart and help --}}
            <div class="flex flex-row gap-4">
                <div class="flex flex-row items-center">
                    <i class='bx bx-help-circle text-4xl'></i>
                    <h1>Help</h1>
                </div>
                <div>
                    <i class='bx bxs-cart text-4xl'></i>
                </div>
            </div>
        </div>
        <hr>

        {{-- <div class="flex justify-between items-center bg-[#F4A100] p-1 px-16">

            <div class="flex justify-center align-bottom">
                <h2 class=" text-white font-bold text-xl">All Products</h2><i
                    class='bx bx-chevron-down text text-xl text-white'></i>
            </div>

            <div class="flex items-center">
                <i class='bx bxs-cart text-5xl'></i>
                <i class='bx bxs-user-circle text-5xl m-0'></i>


                <i class='bx bx-chevron-down text-4xl ml-0'></i>
            </div>
        </div> --}}
    </div>
</header>

<body>
    {{-- 
@foreach ($user as $user)
<h1 class="text-7xl">{{ $user['name'] }}</h1>
<h1 class="text-7xl">{{ $user['age'] }}</h1>
@if ($user['age'] < 21)
    <p>Too young to have s*x</p>
@endif
<hr>

@endforeach --}}
</body>

</html>
