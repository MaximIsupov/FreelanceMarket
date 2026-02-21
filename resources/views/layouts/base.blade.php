<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('includes.header')

    <body>
        <div class="content">
            @yield('content')
        </div>
    </body>

    @include('includes.footer')

</html>
