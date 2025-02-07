@extends('dashboard-theme.master')

@section('main')
<div class="container mt-4">
    <div class="card">
        <div class="text-white card-header bg-primary">
            <h4>{{ __('messages.edit-ettings') }}</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.settings.update', $setting) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" class="form-control" value="{{ $setting->address }}">
                    <x-error-form name="address" />
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="{{ $setting->phone }}">
                    <x-error-form name="phone" />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ $setting->email }}">
                    <x-error-form name="email" />
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" id="facebook" name="facebook" class="form-control" value="{{ $setting->facebook }}">
                    <x-error-form name="facebook" />
                </div>
                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" id="twitter" name="twitter" class="form-control" value="{{ $setting->twitter }}">
                    <x-error-form name="twitter" />
                </div>
                <div class="form-group">
                    <label for="linkedin">LinkedIn</label>
                    <input type="text" id="linkedin" name="linkedin" class="form-control" value="{{ $setting->linkedin }}">
                    <x-error-form name="linkedin" />
                </div>
                <div class="form-group">
                    <label for="youtube">YouTube</label>
                    <input type="text" id="youtube" name="youtube" class="form-control" value="{{ $setting->youtube }}">
                    <x-error-form name="youtube" />
                </div>
                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" id="instagram" name="instgram" class="form-control" value="{{ $setting->instgram }}">
                    <x-error-form name="instgram" />
                </div>
                <button type="submit" class="btn btn-success">Save Changes</button>
            </form>
        </div>
    </div>
</div>
@endsection
