@extends('layouts.app')

@section('content')

    <div class="lg:flex lg:justify-between">
        <div class="lg:w-32">
            @include('_sidebar-links')
        </div>

        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
            @include('_publish-tweet-panel')
            
            <div class="border border-gray-300 rounded-lg">
                @foreach (range(1,5) as $item)
                    @include('_tweet')
                @endforeach
            </div>
        </div>
        
        <div class="lg:w-1/6">
            @include('_friend-list')
        </div>
    </div>
@endsection
