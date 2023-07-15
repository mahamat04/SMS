@extends('layouts.guest')

@section('title', 'Login SMS')

@section('body')

    <x-partials.authentication-card class="my-12">
        <form action="{{ route('login') }}" method="POST" class="px-5 md:p-5 w-full border-b-2 my-3">
            <x-input name="email" id="email" type="email" label="Email" />
            <x-input name="password" id="password" type="password" label="Password" />
            <label for="remember"></label>
            <div class="my-4">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>
            @csrf
                <x-button class="my-4 px-4 md:px-10 w-full">
                    Log in
                </x-button>
        </form>
  
        <x-slot:footer>
            <a href="{{route('password.request')}}" class="text-blue-500" aria-label="Forgot Password">Forgot your Password?</a>

        </x-slot:footer>
    </x-partials.authentication-card>
@endsection