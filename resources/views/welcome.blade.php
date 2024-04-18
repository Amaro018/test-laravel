@extends('layout.layout')
@section('content')
    <div>
        @include('shared.success-message')
        @include('shared.share-input')

        @foreach ($ideas as $idea)
            <div class="flex justify-center mt-5">
                <div class="container bg-white h-auto w-96 border border-black p-2">
                    <div class="flex flex-row justify-between items-center">

                        <div class="flex flex-row items-center gap-2">
                            <img class="w-20" src="https://api.dicebear.com/8.x/adventurer/svg?seed={{ $idea->user->name }}"
                                alt="{{ $idea->user->name }}" />
                            <h1 class="font-bold">
                                {{ $idea->user->name }}
                            </h1>
                        </div>

                        <div class="flex flex-row gap-4">
                            <a href="{{ route('shares.edit', $idea->id) }}">
                                <button
                                    class="bg-blue-500 hover:bg-blue-400 text-white font-bold px-2 border-b-4 border-blue-700 hover:border-blue-500 rounded">EDIT</button>
                            </a>
                            <a href="{{ route('shares.show', $idea->id) }}">
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

                    {{-- this is the shared content --}}


                    <div>
                        <p>{{ $idea->content }}</p>
                    </div>


                    {{-- likes count --}}
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-row">
                            <p>💓</p>
                            <p>{{ $idea->likes }}</p>
                        </div>

                        {{-- time posted --}}
                        <div class="flex flex-row">
                            <p>⌛</p>
                            <p>{{ $idea->created_at }}</p>
                        </div>
                    </div>

                    {{-- input for a comment --}}
                    <form action="{{ route('shares.comments.store', $idea->id) }}" method="POST">
                        @csrf
                        @method('post')
                        <div>
                            <textarea name="comment" id="" cols="30" rows="10"
                                class="resize-none w-full  h-12 border border-black rounded-md mt-3"></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="bg-green-300 border border-black rounded-md p-2 mt-5">POST
                                COMMENT</button>
                        </div>
                    </form>
                    <hr>

                    @foreach ($idea->comments as $comment)
                        {{-- name of the commenter --}}
                        <div class="flex justify-between">
                            <div class="flex flex-row">
                                <h1>😊</h1>
                                <h1>{{ $idea->user->name }}</h1>
                            </div>

                            {{-- time posted the comment --}}
                            <div>
                                <h1>${{ $comment->created_at }}</h1>
                            </div>
                        </div>

                        {{-- the comment in the post --}}
                        <div class="px-6 py-2">
                            <p>
                                {{ $comment->comment }}
                            </p>
                        </div>
                        <hr class="border border-black">
                    @endforeach
                </div>
            </div>
    </div>
    @endforeach

    {{-- PAGINATION --}}
    <div class="container flex justify-center mt-4">
        <div class="w-1/2">
            {{ $ideas->links() }}
        </div>
    </div>
@endsection
