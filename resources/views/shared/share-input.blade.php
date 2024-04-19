<div class="container flex justify-center gap-10">

    @auth
        <form action="{{ route('shares.store') }}" method="POST">
            @csrf

            <div class="flex flex-col">
                <textarea name="content" type="text" class="resize-none w-96  h-24 border border-black rounded-md" rows="3"></textarea>
                @error('content')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>


            <div class="container flex justify-center">
                <button type="submit" class="bg-green-300 border border-black rounded-md p-2 mt-5">SHARE IDEAS</button>
            </div>
        </form>
    @endauth

</div>
@guest
    <div class="flex justify-center">
        <a href="{{ route('login') }}">
            <h1>LOG IN TO SHARE A POST</h1>
        </a>
    </div>
@endguest
