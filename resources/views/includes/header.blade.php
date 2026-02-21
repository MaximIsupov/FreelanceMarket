
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
                <a href="{{ route('home') }}">Главная</a>
                <a href="#">Биржа</a>
            </div>
            <div class="header__auth">
                <a href="{{ route('register') }}">Регистрация</a>
                <a href="{{ route('login') }}">Вход</a>
            </div>
        </div>
    </header>