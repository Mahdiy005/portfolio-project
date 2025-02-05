@extends('dashboard-theme.master')

@section('main')
<div class="container mt-4 rtl">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>{{ __('messages.features') }}</h2>
        <x-action-button :href="route('dashboard.features.create')" type="create" />
    </div>
    <x-status />
    <div class="table-responsive">
        @if($features->isEmpty())
            <x-empty-alert>{{ __('messages.no-features-available') }}</x-empty-alert>
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
                    @foreach($features as $key => $feature)
                    <tr>
                        <td>{{ $features->firstItem() + $loop->index }}</td>
                        <td>{{ $feature->title }}</td>
                        <td>{{ $feature->description }}</td>
                        <td>{!! $feature->icon !!}</i></td>
                        <td>
                            <x-action-button :href="route('dashboard.features.show', ['feature' => $feature])" type="show" />
                            <x-action-button :href="route('dashboard.features.edit', ['feature' => $feature])" type="edit" />
                            <x-delete-button :href="route('dashboard.features.destroy', ['feature' => $feature])">{{ __('messages.delete') }}</x-delete-button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $features->render('pagination::bootstrap-4') }}
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
