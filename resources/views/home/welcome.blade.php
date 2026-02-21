@extends('layouts.base')

@section('content')
<h1>
    {{ config('app.name') }}
</h1>
<x-worklist :title="$sellersSectionTitle" :fullPageUrl="$sellersFullPageUrl" :posts="$latestJobs">
</x-worklist>
<x-worklist :title="$freelancersSectionTitle" :fullPageUrl="$freelancersFullPageUrl" :posts="$latestServices">
</x-worklist>
@endsection