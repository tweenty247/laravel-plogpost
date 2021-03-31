@extends('layout.app')
@section('title')
    Posts
@endsection
@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form class="mt-2 space-y-6" action="{{ route('posts') }}" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="10" placeholder="Post something" class="rounded-none relative block w-full px-3 py-2 border border-gray-300 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm 
                                        @error('body') border border-red-300 
                                        @enderror "></textarea>
                    @error('body')
                        <div class="text-red-500 mt-2 text-small">{{ $message }}</div>
                    @enderror
                </div>


                <div>
                    <button type="submit"
                        class="group relative w-2/12 flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Post
                    </button>
                </div>
            </form>
        </div>
    @endsection
