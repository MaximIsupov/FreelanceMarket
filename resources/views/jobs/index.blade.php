@extends('layouts.base')

@section('page.title', 'Заявки селлеров')

@section('content')
<h1>
    @yield('page.title')
</h1>

<x-worklist :posts="$jobs" type="jobs">
</x-worklist>
@endsection