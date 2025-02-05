@extends('dashboard-theme.master')

@section('main')
<div class="container mt-4 rtl">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>{{ __('messages.services') }}</h2>
        <x-action-button :href="route('dashboard.services.create')" type="create" />
    </div>
    <x-status />
    <div class="table-responsive">
        @if($services->isEmpty())
            <x-empty-alert>{{ __('messages.no-services-available') }}</x-empty-alert>
        @else
            <table class="table table-bordered table-striped rtl">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>{{ __('messages.title') }}</th>
                        <th>{{ __('messages.description') }}</th>
                        <th>{{ __('messages.icon') }}</th>
                        <th>{{ __('messages.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $key => $service)
                    <tr>
                        <td>{{ $services->firstItem() + $loop->index }}</td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{!! $service->icon !!}</i></td>
                        <td>
                            <x-action-button :href="route('dashboard.services.show', ['service' => $service])" type="show" />
                            <x-action-button :href="route('dashboard.services.edit', ['service' => $service])" type="edit" />
                            <x-delete-button :href="route('dashboard.services.destroy', ['service' => $service])">{{ __('messages.delete') }}</x-delete-button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $services->render('pagination::bootstrap-4') }}
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
