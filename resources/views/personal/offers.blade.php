@extends('layouts.base')
@section('page.title', __('Мои заявки'))

@section('content')
    <x-worklist :posts="$jobs" type="jobs">
    </x-worklist>
@endsection