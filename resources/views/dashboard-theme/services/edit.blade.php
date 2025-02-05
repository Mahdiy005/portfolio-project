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
                    <label for="title">{{ __('messages.title') }}</label>
                    <input type="text" class="form-control" id="title" name="title" required value="{{ $service->title }}">
                    @error('title')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">{{ __('messages.description') }}</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $service->description }}</textarea>
                    @error('description')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="icon">{{ __('messages.icon') }}</label>
                    <input type="text" class="form-control" id="icon" name="icon" required value="{{ $service->icon }}">
                    @error('icon')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                </div>
                <button type="submit" class="btn btn-success">{{ __('messages.update-service') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
