<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylsheet" href="{{ URL::to('src/css/main.css') }}">
        @yield('styles')
        </head>
        <body>
            @include('includes.header')
            <div class="main">
                @yield('content')
            </div>
            @include('includes.footer')
        </body>
    
</html>