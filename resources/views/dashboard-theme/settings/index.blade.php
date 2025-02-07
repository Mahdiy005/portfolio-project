@extends('dashboard-theme.master')

@section('main')
<div class="container mt-4">
    <div class="card">
        <div class="text-white card-header bg-primary d-flex justify-content-between">
            <h4>{{ __('messages.settings') }}</h4>
            <a href="{{ route('dashboard.settings.edit', $settings) }}" class="btn btn-warning">Update</a>
        </div>
        <div class="card-body">
        <x-status />
            <table class="table table-bordered">
                <tr>
                    {{-- {{ dd($settings) }} --}}
                    <th>Address</th>
                    <td>{{ $settings->address }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $settings->phone }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $settings->email }}</td>
                </tr>
                <tr>
                    <th>Facebook</th>
                    <td>{{ $settings->facebook }}</td>
                </tr>
                <tr>
                    <th>Twitter</th>
                    <td>{{ $settings->twitter }}</td>
                </tr>
                <tr>
                    <th>LinkedIn</th>
                    <td>{{ $settings->linkedin }}</td>
                </tr>
                <tr>
                    <th>YouTube</th>
                    <td>{{ $settings->youtube }}</td>
                </tr>
                <tr>
                    <th>Instagram</th>
                    <td>{{ $settings->instgram }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
