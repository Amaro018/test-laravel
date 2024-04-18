<div class="w-full mx-0">
    <div class="bg-[#388087] px-16 flex justify-end gap-4 py-1">
        @guest

            <div class="border-r-2  border-white px-4">
                <a href="{{ route('register') }}">
                    <h1 class="font-bold text-white">Create Account</h1>
                </a>
            </div>
            <div>

                <a href="{{ route('login') }}">
                    <h1 class="font-bold text-white">Sign In</h1>
                </a>
            </div>
        @endguest

        @auth
            {{-- <div>
                <a href="">{{ Auth::user()->username }}
                </a>
            </div> --}}
            <nav class=" text-white">
                <div class="container mx-auto">
                    <div class="flex items-center justify-between gap-4">
                        <div class="text-lg">{{ Auth::user()->username }}</div>
                        <div class="relative">


                            <button id="dropdownButton" onclick="toggleDropdown()">
                                <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                    <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    
                                </div>
                            </button>




                            <div id="dropdownMenu" class="absolute right-0 w-48 bg-[#388087] mt-2 rounded hidden">
                                <a href="/profile" class="block px-4 py-2 hover:bg-gray-600">Manage Profile</a>
                                <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-600">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        @endauth
    </div>
