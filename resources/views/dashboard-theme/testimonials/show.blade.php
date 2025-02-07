@extends('dashboard-theme.master')

@section('main')
<div class="container mt-4 rtl-support">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>{{ __('messages.feature-deatils') }}</h2>
        <a href="{{ route('dashboard.features.index') }}" class="btn btn-secondary">{{ __('messages.back-to-features') }}</a>
    </div>

    <div class="card">
        <div class="card-header">{{ $feature->title }}</div>
        <div class="card-body">
            <p><strong>{{ __('messages.description') }}:</strong> {{ $feature->description }}</p>
            <p><strong>{{ __('messages.icon') }}:</strong> {!! $feature->icon !!}</p>
        </div>
    </div>
</div>
@endsection
