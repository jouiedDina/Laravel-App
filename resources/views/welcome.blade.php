@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
    <div class="title m-b-md">
            Project Managment
        </div>
        <img src="img/computer.gif" alt="project managment">
        
        <form action="/projects" method="GET">
        <button class="btn"> Manage your Projects here </button>
        </form>
        
    </div>
</div>
@endsection