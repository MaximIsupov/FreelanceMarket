@extends('layouts.base')

@section('page.title', $title)

@section('content')
<h1>
    {{ $title }}
</h1>
<x-form action="/" type="post" class="form form-register" :isRegister="true" :btnText="$btnText">
</x-form>
@endsection