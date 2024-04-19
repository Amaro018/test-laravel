<div class="container">
    <div class="flex justify-center mt-5">
        <div class="container bg-white h-auto w-2/5  border-gray-400 rounded shadow p-4">
            <div class="flex flex-row justify-between items-center">

                <div class="flex flex-row items-center gap-2">
                    <a href="{{ route('users.show', $idea->user->id) }}">
                        <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                            <img class="w-20" src="{{ $idea->user->getImageUrl() }}" alt="try" />
                        </div>
                    </a>
                    <a href="{{ route('users.show', $idea->user->id) }}">
                        <h1 class="font-bold">
                            {{ $idea->user->name }}
                        </h1>
                    </a>
                </div>

                <div class="flex flex-row gap-4">
                    <a href="{{ route('shares.edit', $idea->id) }}">
                        <button
                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">EDIT</button>
                    </a>
                    <a href="{{ route('shares.show', $idea->id) }}">
                        <button
                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">VIEW</button>
                    </a>

                    <form action="{{ route('shares.destroy', $idea->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button
                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
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
                    <button type="submit"
                        class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">POST
                        COMMENT</button>
                </div>
            </form>
            <hr>

            @foreach ($idea->comments as $comment)
                {{-- name of the commenter --}}
                <div class="flex justify-between py-2">
                    <div class="flex flex-row items-center gap-2">
                        <a href="{{ route('users.show', $comment->user->id) }}">
                            <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                <img class="w-20" src="{{ $comment->user->getImageUrl() }}" alt="try" />
                            </div>
                        </a>
                        <a href="{{ route('users.show', $comment->user->id) }}">
                            <h1 class="font-bold">{{ $comment->user->name }}</h1>
                        </a>
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
