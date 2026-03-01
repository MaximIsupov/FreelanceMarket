@extends('layouts.base')

@section('page.title', $job['title'])

@section('content')

<x-work-detail :currentUserAlreadyOffered="$currentUserAlreadyOffered" :isCurrentUserOwner="$isCurrentUserOwner" :user="$job->user" :id="$job['id']" :title="$job['title']" :price="$job['price']" :time="$job['time']" :description="$job['description']" type="jobs">
</x-work-detail>

@if($isCurrentUserOwner)
    <x-offer-list :offers="$job->offers" :is-current-user-owner="$isCurrentUserOwner" />
@endif
@endsection