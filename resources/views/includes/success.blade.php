@extends('layouts.base')
@section('page.title', __('Успешное действие'))
@section('content')
    <h1>{{ $data['title'] }}</h1>
    <p>{!! $data['text'] !!}</p>
@endsection