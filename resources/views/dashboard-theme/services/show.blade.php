@extends('dashboard-theme.master')

@section('main')
<div class="container mt-4 rtl-support">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>{{ __('messages.service-deatils') }}</h2>
        <a href="{{ route('dashboard.services.index') }}" class="btn btn-secondary">{{ __('messages.back-to-services') }}</a>
    </div>

    <div class="card">
        <div class="card-header">{{ $service->title }}</div>
        <div class="card-body">
            <p><strong>{{ __('messages.description') }}:</strong> {{ $service->description }}</p>
            <p><strong>{{ __('messages.icon') }}:</strong> {!! $service->icon !!}</p>
        </div>
    </div>
</div>
@endsection
