@extends('layouts.base')

@section('page.title', $title)

@section('content')
<h1>
    {{ $title }}
</h1>
<x-form.form method="POST" action="{{ route('login.authenticate') }}" class="form-register form" btn-text="{{ __('Войти') }}">

    <x-form.input type="mail" name="email" placeholder="Электронная почта"></x-form.input>
    <x-form.input type="password" name="password" placeholder="{{ __('Пароль') }}"></x-form.input>

</x-form.form>
@endsection