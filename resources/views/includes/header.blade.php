
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page.title', config('app.name'))</title>
        @vite(['resources/css/app.css'])
    </head>
    <header class="header">
        <a href="{{ route('home') }}" class="header__logo">
            {{ config('app.name') }}
        </a>
        <div class="header__menu">
            <div class="header__nav">
                <a href="{{ route('home') }}">{{ __('Главная') }}</a>
                <a href="#">{{ __('Биржа') }}</a>
            </div>
            <div class="header__auth">
                @auth
                    <a href="{{ route('personal') }}">{{ __('Личный кабинет') }}</a>
                    <a href="{{ route('logout') }}">{{ __('Выход') }}</a>
                @endauth
                @guest
                    <a href="{{ route('login') }}">{{ __('Вход') }}</a>
                    <a href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                @endguest
            </div>
        </div>
    </header>