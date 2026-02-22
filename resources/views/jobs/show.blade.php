@extends('layouts.base')

@section('page.title', $title)

@section('content')
<x-work-detail :title="$title" :price="$price" :time="$time" :description="$description">
</x-work-detail>

@endsection