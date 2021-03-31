@extends('layout.app')
@section('title')
    Login
@endsection
@section('content')
    <div class="justify-center">
        <div class="min-h-screen  flex  justify-center bg-gray-50 py-2 px-4 sm:px-6 lg:px-8">
            <div class=" w-4/12 space-y-8">
                <div>
                    <h2 class=" text-center text-3xl font-extrabold text-gray-900">
                        Sign in to your account
                    </h2>

                </div>
                <form class="mt-2 space-y-6" action="{{ route('login') }}" method="POST">
                    @csrf
                    <input type="hidden" name="remember" value="true">

                    @if (session()->has('status'))
                        <div
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="mb-4">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" value="{{ old('email') }}" name="email" type="email"
                            autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm @error('email') border border-red-300
                                                @enderror " placeholder="Email address">

                        @error('email')
                            <div class="text-red-500 mt-2 text-small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm @error('password') border border-red-300
                                                @enderror " placeholder="Password">
                        @error('password')
                            <div class="text-red-500 mt-2 text-small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember_me" type="checkbox"
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                                Remember me
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                                Forgot your password?
                            </a>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <!-- Heroicon name: solid/lock-closed -->
                                <svg class="h-5 w-5 text-blue-500 group-hover:text-blue-400"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection