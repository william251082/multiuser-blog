<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="stylsheet" href={{ URL::secure('src/css/main.css') }}>
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