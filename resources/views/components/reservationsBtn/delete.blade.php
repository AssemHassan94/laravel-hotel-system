<form method="POST" style="display:inline;" action="{{ route('reservation.destroy', $id) }}">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure to delete room?')" title="delete" class="btn btn-danger text-white btn-sm">
        <i class="fa fa-user-times"></i>
    </button>
</form>

