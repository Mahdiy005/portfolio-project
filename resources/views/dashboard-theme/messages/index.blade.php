@extends('dashboard-theme.master')

@section('main')
<div class="container mt-4">
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h2>{{ __('messages.messages') }}</h2>
    </div>
    <x-status state="success"></x-status>
    <div class="row">
        @if (count($messages) > 0)
        @foreach($messages as $message)
        <div class="mb-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $message->name }}</h5>
                    <h6 class="mb-2 card-subtitle text-muted">{{ $message->email }}</h6>
                    <p class="card-text"><strong>Subject:</strong> {{ $message->subject }}</p>
                    <p class="card-text">{{ $message->message }}</p>
                    <form action="{{ route('dashboard.messages.destroy', $message) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <x-empty-alert>{{ __('messages.no-messages-available') }}</x-empty-alert>
        @endif
    </div>
</div>
@endsection
