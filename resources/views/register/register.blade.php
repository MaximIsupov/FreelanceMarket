@extends('layouts.base')

@section('page.title', 'Регистрация')

@section('content')
<h1>
    Регистрация
</h1>
<x-form action="/" type="post">
    <input type="mail" name="mail" placeholder="Электронная почта">
    <input type="password" name="password" placeholder="Пароль">
</x-form>
@endsection