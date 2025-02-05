@extends('dashboard-theme.master')

@section('main')
<div class="container mt-4 rtl-support">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>{{ __('messages.add-new-service') }}</h2>
        <a href="{{ route('dashboard.services.index') }}" class="btn btn-secondary">{{ __('messages.back-to-features') }}</a>
    </div>
    <x-status state="success" />

    <div class="card">
        <div class="card-header">{{ __('messages.feature-deatils') }}</div>
        <div class="card-body">
            <form action="{{ route('dashboard.features.update', $feature) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <x-label-form for="title">{{ __('messages.title') }}</x-label-form>
                    <x-input-form type="text" id="title" name="title" value="{{ $feature->title }}"/>
                    <x-error-form name="title" />
                </div>
                <div class="form-group">
                    <x-label-form for="description">{{ __('messages.title') }}</x-label-form>
                    <x-form-area id="description" name="description" value="{{ $feature->description }}"/>
                    <x-error-form name="description" />
                </div>
                <div class="form-group">
                     <x-label-form for="icon">{{ __('messages.title') }}</x-label-form>
                     <x-input-form type="text" id="icon" name="icon" value="{{ $feature->icon }}"/>
                     <x-error-form name="icon" />
                </div>
                <x-submit-form>{{ __('messages.update') }}</x-submit-form>
            </form>
        </div>
    </div>
</div>
@endsection
