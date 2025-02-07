@extends('dashboard-theme.master')

@section('main')
    <div class="container mt-4 rtl-support">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h2>{{ __('messages.add-new') }}</h2>
            <a href="{{ route('dashboard.testimonials.index') }}"
                class="btn btn-secondary">{{ __('messages.back-to-testimonials') }}</a>
        </div>
        <x-status />

        <div class="card">
            <div class="card-body">
                <form action="{{ route('dashboard.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <x-label-form for="name">{{ __('messages.name') }}</x-label-form>
                        <x-input-form type="text" id="name" name="name" />
                        <x-error-form name="name" />
                    </div>
                    <div class="form-group">
                        <x-label-form for="position">{{ __('messages.position') }}</x-label-form>
                        <x-input-form type="text" id="position" name="position" />
                        <x-error-form name="position" />
                    </div>
                    <div class="form-group">
                        <x-label-form for="description">{{ __('messages.description') }}</x-label-form>
                        <x-form-area id="description" name="description" />
                        <x-error-form name="description" />
                    </div>
                    <div class="form-group">
                        <x-label-form for="image">{{ __('messages.image') }}</x-label-form>
                        <x-input-form type="file" id="image" name="image" />
                        <x-error-form name="image" />
                    </div>
                    <x-submit-form>{{ __('messages.save') }}</x-submit-form>
                </form>
            </div>
        </div>
    </div>
@endsection
