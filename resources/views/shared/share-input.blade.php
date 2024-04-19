<div class="flex justify-center">
    @auth
        <div class="container bg-white h-auto w-2/5  border-gray-400 rounded shadow p-4">
            <form action="{{ route('shares.store') }}" method="POST">
                @csrf
                <textarea name="content" type="text" class="resize-none w-full border border-gray-400 rounded shadow" rows="3"></textarea>
                @error('content')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror



                <div class="container flex justify-center">
                    <button type="submit"
                        class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mt-2">SHARE
                        IDEAS</button>
                </div>
            </form>
        @endauth

    </div>
</div>
@guest
    <div class="flex justify-center">
        <a href="{{ route('login') }}">
            <h1>LOG IN TO SHARE A POST</h1>
        </a>
    </div>
@endguest
