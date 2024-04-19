@extends('layout.layout')
@section('content')
    <div>
        <div class="flex justify-center mt-5">
            <div class="container bg-white h-auto w-2/5 border border-black p-2">



                <div class="flex flex-row justify-between items-center px-4">
                    <div class="flex flex-row items-center gap-4">
                        <img class="w-48 rounded-full" src="{{ $user->getImageUrl() }}" alt="{{ $user->name }}" />
                        @if ($editing)
                            <form enctype="multipart/form-data" action="{{ route('users.update', $user->id) }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="flex flex-col gap-2">
                                    <input type="text" id="name" name="name" value="{{ $user->name }}"
                                        class="p-2 border-2 border-black">
                                    @error('name')
                                        <span> {{ $message }}</span>
                                    @enderror
                                    <input type="text" id="email" name="email" value="{{ $user->email }}"
                                        class="p-2 border-2 border-black">
                                    @error('email')
                                        <span> {{ $message }}</span>
                                    @enderror
                                </div>
                            @else
                                <div class="flex flex-col justify-start">
                                    <h1 class="font-bold text-4xl">
                                        {{ $user->name }}
                                    </h1>
                                    <p class="text-2xl underline">{{ $user->email }}</p>
                                </div>
                        @endif
                    </div>

                    @if ($editing)
                        <div class="flex justify-end">
                            <a href="{{ route('users.show', $user->id) }}">
                                <div
                                    class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                    <h1>view</h1>
                                </div>
                            </a>
                        </div>
                    @endif


                </div>

                <div class="px-8">
                    <label for="" class="text-2xl">Profile Picture</label>
                    <input type="file" name="image"
                        class="shadow border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="px-8">
                    <div class="">
                        <h1 class="text-2xl font-bold">Bio :</h1>
                    </div>
                    {{-- $editing ?? false alternative if editing is not read as true --}}
                    @if ($editing)
                        <input type="text" id="bio" name="bio" class="w-full h-48 p-2 border-2 border-black">
                        @error('bio')
                            <span>{{ $message }}</span>
                        @enderror
                    @else
                        <div class="">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed eveniet consequatur sint iure.
                                Sunt
                                optio beatae dolorum asperiores odio accusamus culpa aperiam atque, corporis veniam dolorem
                                numquam unde temporibus saepe.</p>
                        </div>
                    @endif
                    <hr class="mt-2">
                    <button
                        class="mt-2 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        CONFIRM
                    </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
