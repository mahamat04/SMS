@extends('layouts.guest')

@section('title', 'SMS Login')

@section('body')

    <div>
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-10 w-auto" src="" alt="Your Company">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Welcome to SMS</h2>
            </div>
        </div>
        <x-partials.authentication-card>
            <form action="{{ route('login') }}" method="POST" class="px-3 md:p-5 w-full border-b-2">
                <x-input name="email" id="email" type="email" label="Email" />
                <x-input name="password" id="password" type="password" label="Password" />
                <label for="remember"></label>
                <div class="my-3">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember Me</label>
                </div>
                @csrf
                    <x-button class="my-3 px-6 md:px-10 w-full">
                        Log in
                    </x-button>
            </form>
    
            <x-slot:footer>
                <a href="{{route('password.request')}}" class="text-blue-800" aria-label="Forgot Password">Forgot your Password?</a>

            </x-slot:footer>
        </x-partials.authentication-card>
    </div>
   
@endsection


