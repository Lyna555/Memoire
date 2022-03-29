<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap; position:fixed">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased" style="background: url('{{ URL('images/back.jpeg') }}');background-size:100% 125%;">
        <x-jet-banner />
            <div style="width:100%;height:100vh;background: rgba(0, 0, 0, 0.589)">
                @livewire('navigation-menu')
               {{$slot}}
            </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
