@extends('layouts.base')

@section('page.title', $job['title']);

@section('content')
<x-work-detail :title="$job['title']" :price="$job['price']" :time="$job['time']" :description="$job['description']">
</x-work-detail>

@endsection