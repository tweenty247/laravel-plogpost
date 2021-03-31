@extends('layout.app')
@section('title')
    Posts
@endsection
@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <button
            class="group relative w-2/12 flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            <a href="{{ route('addposts') }}">Add post</a>
        </button>
           
            <h1 class="font-bold my-4 mt-6 text-blue-500">SAMPLE POSTS</h1>

            @if ($posts->count())
                @foreach ($posts as $post)
                    <div>
                        <a href="" class="font-bold">{{ $post->user->username }}</a> <span class="text-sm text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
                        <p class="mb-2">{{ $post->body }}</p>
                    </div>
                @endforeach
                {{ $posts->links() }}

            @else
                <p>There are no post!</p>

            @endif
        </div>
    </div>
@endsection
