@extends('layout.layout')
@section('content')
    <div class="flex flex-col justify-center mt-5">
        <div class="flex justify-center mt-5 ">
            <div class="container bg-white h-auto w-2/5  border-gray-400 rounded shadow p-4 ">

                <div class="flex flex-row justify-between items-center px-4">
                    <div class="flex flex-row items-center gap-4">
                        <img class="w-48 h-48 rounded-full" src="{{ $user->getImageUrl() }}" alt="{{ $user->image }}" />
                        <div class="flex flex-col justify-start">
                            <h1 class="font-bold text-4xl">
                                {{ $user->name }}
                            </h1>
                            <p class="text-2xl underline">{{ $user->email }}</p>
                        </div>
                    </div>
                    @auth()
                        @if (Auth::id() === $user->id)
                            <div class="flex justify-end">
                                <a href="{{ route('users.edit', $user->id) }}">
                                    <button
                                        class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                        Update profile
                                    </button>
                                </a>
                            </div>
                        @endif
                    @endauth
                </div>


                <div class="px-8 py-4">
                    <div class="">
                        <h1 class="text-2xl">BIO :</h1>
                    </div>
                    <div class="">
                        <p>{{ $user->bio }}</p>
                    </div>
                </div>

                <div class="p-8 flex flex-row items-center gap-4 hover:cursor-pointer">
                    <i class='bx bxs-heart'></i>
                    <h1>900</h1>
                    <i class='bx bxs-share'></i>
                    <h1>{{ $user->ideas()->count() }}</h1>
                    <i class='bx bxs-comment'></i>
                    <h1>{{ $user->comments()->count() }}</h1>
                </div>

                @auth()
                    @if (Auth::id() !== $user->id)
                        <div class="px-8 py-4">
                            <button
                                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                Follow
                            </button>
                        </div>
                    @endif
                @endauth
            </div>
        </div>
        @foreach ($ideas as $idea)
            @include('shared.share-card', ['idea' => $idea])
        @endforeach

    </div>
@endsection
