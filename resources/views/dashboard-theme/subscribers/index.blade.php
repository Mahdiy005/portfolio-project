@extends('dashboard-theme.master')

@section('main')
<div class="container mt-4 rtl">
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h2>{{ __('messages.subscribers') }}</h2>
    </div>
    <x-status />
    <div class="table-responsive">
        @if($subscribers->isEmpty())
            <x-empty-alert>{{ __('messages.no-subscriber-available') }}</x-empty-alert>
        @else
            <table class="table table-bordered table-striped rtl">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>{{ __('messages.email') }}</th>
                        <th>{{ __('messages.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subscribers as $key => $subscriber)
                    <tr>
                        <td>{{ $subscribers->firstItem() + $loop->index }}</td>
                        <td>{{ $subscriber->email }}</td>
                        <td>
                            <x-delete-button :href="route('dashboard.subscribers.destroy', ['subscriber' => $subscriber])">{{ __('messages.delete') }}</x-delete-button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $subscribers->render('pagination::bootstrap-4') }}
        @endif
    </div>
</div>

{{-- <script>
    function confirmDelete($id) {
        is_ok = confirm($id);
        console.log(is_ok);
    }
</script> --}}
@endsection
