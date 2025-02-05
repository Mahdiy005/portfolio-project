<form  action="{{ $href }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure ?')">{{ $slot }}</button>
</form>
