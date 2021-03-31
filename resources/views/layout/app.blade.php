<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

</head>

<body class="">

    @auth()

        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="{{ route('home') }}" class="p-3">Home</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('posts') }}" class="p-3">Posts</a>

                </li>
            </ul>
            <ul class="flex items-center">
                <li>
                    <a href="" class="p-3">{{ auth()->user()->username }}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="post" class="inline p-3">
                        @csrf
                        <button class="" type="submit">logout</button>
                    </form>

                </li>
            </ul>


        </nav>
    @endauth

    @guest()
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="{{ route('home') }}" class="p-3">Home</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                </li>
                <li>
                    {{-- <a href="{{ route('posts') }}" class="p-3">Posts</a> --}}
                </li>
            </ul>
            <ul class="flex items-center">

                <li>
                    <a href="{{ route('login') }}" class="p-3">Login</a>
                </li>

                <li>
                    <a href="{{ route('register') }}" class="p-3">Register</a>
                </li>
            </ul>


        </nav>
    @endguest
    @yield('content')
</body>

</html>
