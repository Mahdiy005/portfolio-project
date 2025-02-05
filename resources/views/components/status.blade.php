{{-- @props(['state']) --}}
@if (session('success'))
        <div class="alert alert-success" style="font-weight: bold">{{ session('success') }}</div>
    @endif
