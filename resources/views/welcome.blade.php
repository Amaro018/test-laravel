@extends('layout.layout')
@section('content')
    <div>
        @include('shared.success-message')
        <form action="{{ route('shares.store') }}" method="POST">
            @csrf
            <div class="container flex justify-center">
                <div class="flex flex-col">
                    <textarea name="share-content" type="text" class="resize-none w-96  h-24 border border-black rounded-md" rows="3"></textarea>
                    @error('share-content')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="container flex justify-center">
                <button type="submit" class="bg-green-300 border border-black rounded-md p-2 mt-5">SHARE IDEAS</button>
            </div>
        </form>

        @foreach ($ideas as $idea)
            <div class="flex justify-center mt-5">
                <div class="container bg-white h-auto w-96 border border-black p-2">

                    <div class="flex flex-row justify-between">
                        <h1 class="font-bold">JUN</h1>
                        <div class="flex flex-row gap-4">
                            <a href="{{ route('editSharedpost.edit', $idea->id) }}">
                                <button
                                    class="bg-blue-500 hover:bg-blue-400 text-white font-bold px-2 border-b-4 border-blue-700 hover:border-blue-500 rounded">EDIT</button>
                            </a>
                            <a href="{{ route('showSharedpost.show', $idea->id) }}">
                                <button
                                    class="bg-blue-500 hover:bg-blue-400 text-white font-bold px-2 border-b-4 border-blue-700 hover:border-blue-500 rounded">VIEW</button>
                            </a>
                            <form action="{{ route('shares.destroy', $idea->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button
                                    class="bg-red-500 hover:bg-red-400 text-white font-bold px-2 border-b-4 border-red-700 hover:border-red-500 rounded">
                                    x
                                </button>
                            </form>
                        </div>
                    </div>
                    <div>
                        <p>{{ $idea->content }}</p>
                    </div>
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
                    <div>
                        <textarea name="" id="" cols="30" rows="10"
                            class="resize-none w-full  h-12 border border-black rounded-md mt-3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="bg-green-300 border border-black rounded-md p-2 mt-5">POST COMMENT</button>
                    </div>
                    <hr>
                    <div class="flex justify-between">
                        <div class="flex flex-row">
                            <h1>😊</h1>
                            <h1>Bon</h1>
                        </div>
                        <div>
                            <h1>3 hour ago</h1>
                        </div>
                    </div>
                    <div class="px-6 py-2">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique at quos sunt deleniti minima
                            assumenda necessitatibus magni neque? Deserunt facere quae autem minus accusamus suscipit
                            dolores
                            cupiditate officiis beatae eligendi!
                        </p>
                    </div>
                </div>
                <hr>
            </div>
    </div>
    @endforeach
    <div class="container flex justify-center mt-4">
        <div class="w-1/2">
            {{ $ideas->links() }}
        </div>
    </div>
@endsection
