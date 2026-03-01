@extends('layouts.base')

@section('page.title', $job['title'])

@section('content')

<x-work-detail :isCurrentUserOwner="$isCurrentUserOwner" :user="$job->user" :id="$job['id']" :title="$job['title']" :price="$job['price']" :time="$job['time']" :description="$job['description']" type="jobs">
</x-work-detail>

@endsection