@extends('layouts.base')

@section('page.title', 'Услуги фрилансеров')

@section('content')
<h1>
    @yield('page.title')
</h1>

<x-worklist :posts="$services" type="services">
</x-worklist>
@endsection