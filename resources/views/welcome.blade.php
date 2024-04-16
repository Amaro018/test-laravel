@extends('layout.layout')
@section('content')
    <div>
        <div class="container flex justify-center ">
            <div>
                <input type="text" class="w-96 border border-black h-60 rounded-md">
            </div>
        </div>
        <div class="container flex justify-center">
            <button class="bg-green-300 border border-black rounded-md p-2 mt-5">SHARE IDEAS</button>
        </div>

        @foreach ($ideas as $idea)
            <div class="flex justify-center mt-5">
                <div class="container bg-white h-96 w-96 border border-black p-2">
                    <div>
                        <h1 class="font-bold">{{ $idea->content }}</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In eius itaque dignissimos rem vero.
                            Nam
                            est, rem quam, blanditiis quae, mollitia ea facilis neque odit nobis fugit quasi quidem quis.
                        </p>
                    </div>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-row">
                            <p>💓</p>
                            <p>100</p>
                        </div>
                        <div class="flex flex-row">
                            <p>⌛</p>
                            <p>{{ Date('Y-M-D') }}</p>
                        </div>
                    </div>
                    <div>
                        <button class="bg-green-300 border border-black rounded-md p-2 mt-5">POST COMMENT</button>
                    </div>
                </div>
            </div>
    </div>
    @endforeach
@endsection
