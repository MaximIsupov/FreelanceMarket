@extends('layouts.base')

@section('page.title', $title)

@section('content')
<h1>
    {{ $title }}
</h1>
<x-form :isLogin="true" class="form-register form" :btnText="$btnText">
</x-form>
@endsection