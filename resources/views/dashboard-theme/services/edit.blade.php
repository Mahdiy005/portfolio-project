@extends('dashboard-theme.master')

@section('main')
<div class="container mt-4 rtl-support">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>{{ __('messages.add-new-service') }}</h2>
        <a href="{{ route('dashboard.services.index') }}" class="btn btn-secondary">{{ __('messages.back-to-services') }}</a>
    </div>
    <x-status state="create-service-status" />

    <div class="card">
        <div class="card-header">{{ __('messages.service-deatils') }}</div>
        <div class="card-body">
            <form action="{{ route('dashboard.services.update', $service) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <x-label-form for="title">{{ __('messages.title') }}</x-label-form>
                    <x-input-form type="text" id="title" name="title" value="{{ $service->title }}"/>
                    <x-error-form name="title" />
                </div>
                <div class="form-group">
                    <x-label-form for="description">{{ __('messages.title') }}</x-label-form>
                    <x-form-area id="description" name="description" value="{{ $service->description }}"/>
                    <x-error-form name="description" />
                </div>
                <div class="form-group">
                     <x-label-form for="icon">{{ __('messages.title') }}</x-label-form>
                     <x-input-form type="text" id="icon" name="icon" value="{{ $service->icon }}"/>
                     <x-error-form name="icon" />
                </div>
                <x-submit-form>{{ __('messages.update-service') }}</x-submit-form>
            </form>
        </div>
    </div>
</div>
@endsection
