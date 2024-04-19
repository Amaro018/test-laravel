
    <div class="w-full mx-0">
        {{-- authentication of user --}}
        {{-- @if () --}}
        @include('layout.Header.Navigation.guest-nav')
        {{-- @endif --}}

        {{-- logo --}}
        <div class="bg-[#6FB3B8] p-4 px-16 flex flex-row justify-between items-center">
            
            <div>
                <a href="{{route('homepage')}}">
                    <h1 class="font-sans text-4xl font-extrabold">.Subli</h1>
                </a>
            </div>
                
                {{-- search bar --}}
                <div class="container w-96 mx-auto px-4">
                    <form action="{{ route('homepage') }}" method="get" class="">
                        <div class="flex flex-row items-center">
                            <input type="text" value="{{ request('search', '') }}" name="search" placeholder="Search Product ..." 
                                   class="flex-grow py-2 text-md leading-tight rounded-l-md  focus:ring-1 border-2 border-y-white focus:ring-white focus:outline-none">
                            <button type="submit" class=" bg-white rounded-r-md">
                                <i class='bx bx-search text-4xl'></i>
                            </button>
                        </div>
                    </form>
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
