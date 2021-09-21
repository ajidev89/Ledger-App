<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body class="font-nunito">
    <div id="app">
        <div class="flex" >
            @include('layouts.components.sidebar')
            <div class="w-4/5  float-right h-screen" >
                <div class="flex-grow p-3 shadow flex justify-end" >
                    <div class="flex space-x-2" >
                        <div class="text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                        </div>
                        <div>
                            <p class="text-xs">Welcome !</p>
                            <p>{{ Auth::user()->name  }}</p>
                        </div>
                        
                    </div>
                    
                </div>
                <main class="p-6">
                    @yield('content')
                </main>
            </div>
        </div>
   
    </div>
</body>
</html>
