@extends('layouts.base')
@section('page.title', __('Личный кабинет'))
@section('content')
<h1>
    {{ $pageTitle }}
</h1>
<div>
    <h2>{{ __('Действия как заказчика:') }}</h2>
    <ul>
        <li>
            <a href="{{ route('jobs.create') }}">{{ __('Разместить запрос на услугу') }}</a>
        </li>
        <li>
            <a href="">{{ __('Просмотреть мои заявки') }}</a>
        </li>
    </ul>
    <h2>{{ __('Действия как фрилансера:') }}</h2>
    <ul>
        <li>
            <a href="{{ route( 'services.create') }}">{{ __('Разместить собственную услугу') }}</a>
        </li>
        <li>
            <a href="">{{ __('Просмотреть мои услуги') }}</a>
        </li>
    </ul>
</div>
@endsection