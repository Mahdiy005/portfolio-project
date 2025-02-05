@props(['state'])
@if (session($state))
        <div class="alert alert-success">{{ session($state) }}</div>
    @endif
