@extends('layouts.base')

@section('page.title', $title)

@section('content')
<h1>
    {{ $title }}
</h1>
<x-form.form method="POST" action="{{ route('register.store') }}" class="form form-register" btn-text="{{ __('Зарегистрироваться') }}">

    <x-form.input type="text" name="name" placeholder="{{ __('Имя') }}" value="{{ old('name') }}"></x-form.input>
    <x-form.input type="mail" name="email" placeholder="Электронная почта"></x-form.input>
    <x-form.input type="password" name="password" placeholder="{{ __('Пароль') }}"></x-form.input>
    <x-form.input type="password" name="password_confirmation" placeholder="{{ __('Подтвердите пароль') }}"></x-form.input>
    <x-form.checkbox name="agreement" value="1">{{ __('Я согласен с условиями обработки персональных данных') }}</x-form.checkbox>

</x-form.form>
@endsection