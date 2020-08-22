<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="/css/common.css" rel="stylesheet">
        @yield('pageCss')
    </head>
    <body>
        @yield('header')

        <div class="contents">
            <div class="main">
                @yield('content')
            </div>
        </div>        

        @yield('footer')
    </body>
</html>
