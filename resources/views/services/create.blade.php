@extends('layouts.base')

@section('page.title', 'Создание новой услуги фрилансера')

@section('content')
<h1>
    @yield('page.title')
</h1>
<x-form.form method="POST" action="{{ route('services.store') }}" class="form-register form" btn-text="{{ __('Создать') }}">
    <x-form.input type="text" name="title" placeholder="Наименование услуги"></x-form.input>
    <x-form.input type="number" name="price" placeholder="Цена" min="0"></x-form.input>
    <x-form.checkbox name="vaguePrice" id="vaguePrice">{{ __('Плавающая цена (С припиской "От")') }}</x-form.checkbox>
    <x-form.input type="number" name="time" min="1" placeholder="Максимальный срок (в днях)"></x-form.input>
    <x-form.textarea name="description" placeholder="Описание"></x-form.textarea>
</x-form.form>
@endsection