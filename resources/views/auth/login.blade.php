@extends('layouts.auth')

@section('content')

<div class="w-full md:w-[50%] lg:w-[30%] mt-4 py-6 px-3 bg-white rounded-xl">
    @if(session()->has('error'))
        <p class=" w-[100%] text-center my-8 py-4 bg-red-400 border-2 text-sm text-white">{{session('error')}}</p>
    @endif
    <h1 class="w-[100%] text-center text-3xl my-3">Sign In</h1>
    <form action="{{ route('login.store') }}" method="post" class="flex flex-col items-center gap-3 w-full">
        @csrf
        <label for="" class="w-full">
            <input type="email" name="email" id="" placeholder="Enter Your Email" class="w-full h-10 text-center border-2">
            @error('email')
                <p class="text-sm text-red-600 text-center">{{$message}}</p>
            @enderror
        </label>
        <label for="" class="w-full">
            <input type="password" name="password" id="" placeholder="Enter Your Password" class="w-full h-10 text-center border-2">
            @error('password')
                <p class="text-sm text-red-600 text-center">{{$message}}</p>
            @enderror
        </label>

        <button type="submit" class="w-full h-10 bg-green-600">Sign In</button>
        <a class="w-full text-center" href="/register">Dont have an account?<span class="text-green-600">Sign Up</span></a>
    </form>
</div>
@endsection
