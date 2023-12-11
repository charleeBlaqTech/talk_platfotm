@extends('layouts.layout')

@section('content')
    <main class="w-[100%] grid place-items-center">
        @guest()
        {{-- <div class="alert">
            @if (session()->has('success'))
            <p class="bg-green-400 text-white w-[70%]">{{session('success')}}</p>
            @endif
        </div> --}}
        <h3>Login to see talks of today......</h3>
        @endguest
        @auth()
        <div class="alert w-full fixed top-18">
            @if (session()->has('success'))
            <p class="fixed top-12 bg-green-400 text-white w-[100%] text-center">{{session('success')}}</p>
            {{-- <img src="{{Auth::user()->getImage()}}" alt="image"> --}}
            <img src="{{asset('storage'. '/' . Auth::user()->image)}}" alt="image">
            @endif
        </div>
        <h3>Welcome home</h3>
        @endauth
    </main>
@endsection
