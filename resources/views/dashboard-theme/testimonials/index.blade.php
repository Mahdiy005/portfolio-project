@extends('dashboard-theme.master')

@section('main')
<div class="container mt-4 rtl">
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h2>{{ __('messages.testimonials') }}</h2>
        <x-action-button :href="route('dashboard.testimonials.create')" type="create" />
    </div>
    <x-status />
    <div class="table-responsive">
        @if($testimonials->isEmpty())
            <x-empty-alert>{{ __('messages.no-testimonials-available') }}</x-empty-alert>
        @else
            <table class="table table-bordered table-striped rtl">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>{{ __('messages.name') }}</th>
                        <th>{{ __('messages.position') }}</th>
                        <th>{{ __('messages.description') }}</th>
                        <th>{{ __('messages.image') }}</th>
                        <th>{{ __('messages.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($testimonials as $key => $testimonial)
                    <tr>
                        <td>{{ $testimonials->firstItem() + $loop->index }}</td>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->position }}</td>
                        <td>{{ $testimonial->description }}</td>
                        <td><img style="width: 100px" src="{{ asset("storage/testimonials/" . $testimonial->image ) }}" alt="image"></td>
                        <td>
                            <x-action-button :href="route('dashboard.testimonials.edit', ['testimonial' => $testimonial])" type="edit" />
                            <x-delete-button :href="route('dashboard.testimonials.destroy', ['testimonial' => $testimonial])">{{ __('messages.delete') }}</x-delete-button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $testimonials->render('pagination::bootstrap-4') }}
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
