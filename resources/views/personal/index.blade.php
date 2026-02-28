@extends('layouts.base')
@section('page.title', __('Личный кабинет'))
@section('content')
<h1>
    {{ $pageTitle }}
</h1>
<div>
    <h2>{{ __('Действия как заказчика:') }}</h2>
    <a href="{{ route('jobs.create') }}">{{ __('Разместить запрос на услугу') }}</a>
    <h2>{{ __('Действия как фрилансера:') }}</h2>
    <a href="{{ route( 'services.create') }}">{{ __('Разместить собственную услугу') }}</a>
</div>
@endsection