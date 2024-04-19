@extends('layout.layout')
@section('content')
    <div>
        <div>
            {{-- sidebar here --}}
        </div>
        <div>
            @include('shared.success-message')
            @include('shared.share-input')
        </div>
        @forelse ($ideas as $idea)
            <div>
                @include('shared.share-card')
            </div>
        @empty
            <p class="text-center mt-4">No Results Found.</p>
        @endforelse

        <div class="mt-3">
            {{ $ideas->withQueryString()->links() }}
        </div>
        <div>
            {{-- @include('shared.side-search') --}}
        </div>
    </div>
@endsection


{{-- @extends('layout.app')

@section('title', 'Dashboard') --}}

{{-- @section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left-sidebar')
        </div>
        <div class="col-6">
            @include('shared.success-message')
            @include('ideas.shared.submit-idea')
            <hr>
            @forelse ($ideas as $idea)
                <div class="mt-3">
                    @include('ideas.shared.idea-card')
                </div>

            @empty
                <p class="text-center mt-4">No Results Found.</p>
            @endforelse

            <div class="mt-3">
                {{ $ideas->withQueryString()->links() }}
            </div>
        </div>
        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection --}}
