<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# profile: http://ogp.me/ns/profile#">
        @include('includes.header')
    </head>
    <body style="background: {{setting('site.background_color')}}">
        <div class="flex-container">
            @section('body')

                @include('includes.menu')

                @yield('content')

            @show
            @include('includes.footer')
        </div>

        @yield('after_scripts')
        @stack('after_scripts')
    </body>
</html>
