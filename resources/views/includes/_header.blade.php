<header class=" h-auto w-full fixed top-0 flex align-middle justify-between px-4 py-2 bg-gray-950 text-white ">
    <div class="logo">
        <h1>Talk</h1>
    </div>
    <nav>
        <ul class="flex align-middle gap-3">
            @guest()
            <li><a href="/">Home</a></li>
            <li><a href="/login">login</a></li>
            <li><a href="/register">sign up</a></li>
            @endguest


            @auth()
                <li><a href="/">Home</a></li>
                <div>
                    <li><a href="/profile">welcome {{Auth::user()->name}}</a></li>
                    <form action="{{route('logout')}}" method="post" class="flex justify-end">
                        @csrf
                        @method('delete')
                        <button type="submit" class="bg-red-400 rounded-sm p-1 hover:bg-red-600 text-black">logout</button>
                    </form>

                </div>
            @endauth

        </ul>
    </nav>
</header>
