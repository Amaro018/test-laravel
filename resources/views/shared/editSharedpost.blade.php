@extends('layout.layout')
@section('content')
    <div>
        <div class="flex justify-center mt-5">
            <div class="container bg-white h-auto w-96 border border-black p-2">

                <div class="flex flex-row justify-between">
                    <h1 class="font-bold">{{ $idea->user->name }}</h1>
                    <div class="flex flex-row gap-4">

                        {{-- to edit button --}}

                        <a href="{{ route('shares.edit', $idea->id) }}">
                            <button
                                class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">EDIT</button>
                        </a>

                        {{-- to view the single share button --}}
                        <a href="{{ route('shares.show', $idea->id) }}">
                            <button
                                class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">VIEW</button>
                        </a>

                        {{-- to delete a share post button --}}
                        <form action="{{ route('shares.destroy', $idea->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button
                                class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
                                x
                            </button>
                        </form>

                    </div>
                </div>

                {{-- to edit the content --}}
                @if ($editing ?? false)
                    <form action="{{ route('shares.update', $idea->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div>
                            <textarea name='share-content' class="resize-none w-full  h-12 border border-black rounded-md mt-3 p-2">{{ $idea->content }}</textarea>
                        </div>
                        @error('share-content')
                            <span>{{ $message }}</span>
                        @enderror
                        <div>
                            <button type="submit"
                                class="bg-gray-500 hover:bg-gray-400 text-white font-bold px-2 border-b-4
                        border-gray-700 hover:border-gray-500 rounded my-4">update</button>
                        </div>
                    </form>
                @else
                    <p>
                        {{ $idea->content }}
                    </p>
                @endif



                <div class="flex flex-row justify-between">
                    <div class="flex flex-row">
                        <p>💓</p>
                        <p>{{ $idea->likes }}0</p>
                    </div>
                    <div class="flex flex-row">
                        <p>⌛</p>
                        <p>{{ $idea->created_at }}</p>
                    </div>
                </div>

            </div>
            <hr>
        </div>
    </div>
@endsection
