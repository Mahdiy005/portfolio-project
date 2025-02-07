@extends('dashboard-theme.master')

@section('main')
<div class="container mt-4 rtl-support">
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h2>{{ __('messages.add-new-testimonial') }}</h2>
        <a href="{{ route('dashboard.services.index') }}" class="btn btn-secondary">{{ __('messages.back-to-testimonials') }}</a>
    </div>
    <x-status state="success" />

    <div class="card">
        <div class="card-body">
            <form action="{{ route('dashboard.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <x-label-form for="name">{{ __('messages.name') }}</x-label-form>
                    <x-input-form type="text" id="name" name="name" value="{{ $testimonial->name }}" />
                    <x-error-form name="name" />
                </div>
                <div class="form-group">
                    <x-label-form for="position">{{ __('messages.position') }}</x-label-form>
                    <x-input-form type="text" id="position" name="position" value="{{ $testimonial->position }}" />
                    <x-error-form name="position" />
                </div>
                <div class="form-group">
                    <x-label-form for="description">{{ __('messages.description') }}</x-label-form>
                    <x-form-area id="description" name="description" value="{{ $testimonial->description }}" />
                    <x-error-form name="description" />
                </div>
                <div>
                    <label style="display: block">Last Image</label>
                    <img style="width: 100px" src="{{ asset('storage/testimonials/' . $testimonial->image) }}" alt="">
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
