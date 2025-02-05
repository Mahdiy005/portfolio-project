<select class="form-control" name="icon" id="icon">
    @foreach ($icons as $icon)

       <option value="{{ $icon }}">{!! $icon !!}</option>
    @endforeach
</select>
