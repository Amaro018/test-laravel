@extends('layout.layout')
@section('content')
<div class="bg-blue-900 text-center py-4 lg:px-4">
    <div class="p-2 bg-blue-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      <span class="flex rounded-full bg-blue-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
      <span class="font-semibold mr-2 text-left flex-auto">successfully shared</span>
      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
  </div>
  </div>    
    <div>
        <form action="{{ route('share.create') }}" method="POST">
            @csrf
            <div class="container flex justify-center ">
                <div>
                    <textarea name="share-content" type="text" class="w-96 border border-black h-60 rounded-md" rows="3"></textarea>
                </div>
            </div>
            <div class="container flex justify-center">
                <button type="submit" class="bg-green-300 border border-black rounded-md p-2 mt-5">SHARE IDEAS</button>
            </div>
        </form>

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
                    <div class="flex flex-row">
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
                        <button class="bg-green-300 border border-black rounded-md p-2 mt-5">POST COMMENT</button>
                    </div>
                </div>
            </div>
    </div>
    @endforeach
@endsection
