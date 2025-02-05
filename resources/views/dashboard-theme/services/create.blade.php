@extends('dashboard-theme.master')

@section('main')
    <div class="container mt-4 rtl-support">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>{{ __('messages.add-new-service') }}</h2>
            <a href="{{ route('dashboard.services.index') }}"
                class="btn btn-secondary">{{ __('messages.back-to-services') }}</a>
        </div>
        <x-status />

        <div class="card">
            <div class="card-header">{{ __('messages.service-deatils') }}</div>
            <div class="card-body">
                <form action="{{ route('dashboard.services.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <x-label-form for="title">{{ __('messages.title') }}</x-label-form>
                        <x-input-form type="text" id="title" name="title" />
                        <x-error-form name="title" />
                    </div>
                    <div class="form-group">
                        <x-label-form for="description">{{ __('messages.description') }}</x-label-form>
                        <x-form-area id="description" name="description" />
                        <x-error-form name="description" />
                    </div>
                    <div class="form-group">
                        <x-label-form for="icon">{{ __('messages.icon') }}</x-label-form>
                        <x-input-form type="text" id="icon" name="icon" />
                        <x-error-form name="icon" />
                    </div>
                    <x-submit-form>{{ __('messages.save-service') }}</x-submit-form>
                </form>
            </div>
        </div>
    </div>
@endsection
