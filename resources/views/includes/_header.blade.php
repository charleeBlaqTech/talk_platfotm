<header class=" h-14 w-full fixed top-0 flex items-center justify-between px-4 py-2 bg-gray-950 text-white ">
    <div class="logo">
        <h1>Talk</h1>
    </div>
    <nav>
        <ul class="hidden md:flex items-center justify-between gap-14">
            @guest()
                <li><a href="/">Home</a></li>
                <li><a href="/login">login</a></li>
                <li><a href="/register">sign up</a></li>
            @endguest


            @auth()
                <li><a href="/">Home</a></li>
                <div class="flex items-center justify-center gap-5">
                    <li><a href="/profile">welcome {{ Auth::user()->name }}</a></li>
                    <form action="{{ route('login.destroy') }}" method="GET" class="flex justify-end">
                        @csrf
                        <button type="submit" class="bg-red-400 rounded-sm p-1 hover:bg-red-600 text-black">logout</button>
                    </form>

                </div>
            @endauth

        </ul>

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6 text-white md:hidden">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
        </svg>

    </nav>
</header>
