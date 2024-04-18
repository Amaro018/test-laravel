@extends('layout.layout')
@section('content')
    <div>
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
@endsection
