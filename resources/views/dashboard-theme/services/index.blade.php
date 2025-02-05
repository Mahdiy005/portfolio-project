@extends('dashboard-theme.master')

@section('main')
<div class="container mt-4 rtl">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>{{ __('messages.services') }}</h2>
        <a href="{{ route('dashboard.services.create') }}" class="btn btn-primary">{{ __('messages.add-new-service') }}</a>
    </div>
    <x-status state="delete-service-status" />
    <x-status state="update-service-status" />
    <div class="table-responsive">
        @if($services->isEmpty())
            <div class="alert alert-info text-center">{{ __('messages.no-services-available') }}</div>
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
                            <a href="{{ route('dashboard.services.show', ['service' => $service]) }}" class="btn btn-info btn-sm">{{ __('messages.show') }}</a>
                            <a href="{{ route('dashboard.services.edit', ['service' => $service]) }}" class="btn btn-warning btn-sm">{{ __('messages.update') }}</a>
                            <form id="del-form-{{ $service->id }}" action="{{ route('dashboard.services.destroy', ['service' => $service]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure ?')">{{ __('messages.delete') }}</button>
                            </form>
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
