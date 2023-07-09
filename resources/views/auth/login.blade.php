@extends('layouts.guest')

@section('title', 'Login')

@section('body')
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
    </x-partials.authentication-card>
@endsection