@extends('layouts.base')

@section('content')
<h1>
    {{ config('app.name') }}
</h1>
<x-worklist type="jobs" title="{{ __('Последние заявки на выполнение работы от селлеров') }}" full-page-url="{{ route('jobs') }}" :posts="$latestJobs" :latest-posts="true">
</x-worklist>
<x-worklist type="services" title="{{ __('Последние размещения услуг от фрилансеров') }}" full-page-url="{{ route('services') }}" :posts="$latestServices" :latest-posts="true">
</x-worklist>
@endsection