@extends('layouts.base')

@section('content')
<h1>
    {{ config('app.name') }}
</h1>
<x-worklist :title="$sellersSectionTitle" :fullPageUrl="$sellersFullPageUrl" :posts="$latestJobs" :latestPosts="true">
</x-worklist>
<x-worklist :title="$freelancersSectionTitle" :fullPageUrl="$freelancersFullPageUrl" :posts="$latestServices" :latestPosts="true">
</x-worklist>
@endsection