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

            <nav class=" text-white ">
                <div class="container mx-auto ">
                    <div class="flex items-center justify-between gap-4">
                        <div class="text-lg"><a href="{{ route('profile') }}">{{ Auth::user()->username }}</a></div>
                        <div class="relative">
                            <button id="dropdownButton" onclick="toggleDropdown()">
                                <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                    <img class="w-20" src="{{ Auth::user()->getImageUrl() }}" alt="try" />
                                </div>
                            </button>
                            <div id="dropdownMenu" class="absolute right-0 w-48 bg-gray-700 mt-2 rounded hidden">
                                <a href="/profile" class="block px-4 py-2 hover:bg-gray-600">Manage Profile</a>
                                <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-600">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        @endauth

    </div>
</div>
