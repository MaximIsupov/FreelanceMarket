@extends('layouts.base')

@section('page.title', __('Создание отклика на зявку'))

@section('content')
    <h1>{{ __("Создайте свое предложение в ответ на заявку") }}</h1>
    <h2>Информация о заявке:</h2>
    <p>Наименование: {{ $job->title }}</p>
    <p>Стоимость: до {{ $job->price }} руб.</p>
    <p>Срок: до {{ $job->time }} дн.</p>
    <p>Описание:</p>
    <p>{{ $job->description }}</p>
    <h2>Создание оффера:</h2>
    <x-form.form method="POST" action="{{ route('offers.store') }}" class="form" btn-text="{{ __('Создать') }}">
        <x-form.input type="number" class="hidden" name="jobId" value="{{ $job->id }}"></x-form.input>
        <x-form.input type="text" name="title" placeholder="{{ __('Наименование услуги') }}"></x-form.input>
        <x-form.input type="number" name="price" placeholder="{{ __('Цена, руб.') }}" min="0" max="{{ $job->price }}"></x-form.input>
        <x-form.input type="number" name="time" placeholder="{{ __('Срок, в днях') }}" min="1" max="{{ $job->time }}"></x-form.input>
        <x-form.textarea name="message" placeholder="{{ __('Сообщение покупателю (Тут можно описать себя, свой опыт работы и расписать, что именно вы намерены сделать для решения задачи)') }}"></x-form.textarea>
    </x-form.form>
@endsection