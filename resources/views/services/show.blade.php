@extends('layouts.base')

@section('page.title', $service['title'])

@section('content')

<x-work-detail :title="$service['title']" :price="$service['price']" :time="$service['time']" :description="$service['description']">
</x-work-detail>

@endsection