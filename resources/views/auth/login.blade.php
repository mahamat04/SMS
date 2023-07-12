<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <title>
            @yield('title', config('app.name', 'SMS'))
        </title>

        <!-- Styles -->
        @vite('resources/css/app.css')
        <livewire:styles />

        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>
        
    </head>
    <body>
        
        <main class="mx-auto flex min-h-screen w-full items-center justify-center bg-gray-800 text-white">
            <section class="flex w-[30rem] flex-col space-y-10">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <h2 class="mt-10 text-center text-4xl font-bold leading-9 tracking-tight my-4">Welcome to SMS</h2>
                </div>
                <div class="text-center text-4xl font-medium">Log in to your account</div>
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500 my-4">
                        <input id="email" type="email" name="email" placeholder="Email" class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none"/>
                    </div>
                    <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500 my-4">
                        <input id="password" type="password" name="password" placeholder="Password" class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none"/>
                    </div>
                    <a href="{{route('password.request')}}" class="transform text-center font-semibold text-gray-500 duration-300 hover:text-gray-300">FORGOT PASSWORD?</a>
                    <button class="transform rounded-sm bg-indigo-600 py-2 font-bold duration-300 hover:bg-indigo-400" type="submit">LOG IN</button>
                </form>
            </section>
        </main>
        
    </body>    

</html>
