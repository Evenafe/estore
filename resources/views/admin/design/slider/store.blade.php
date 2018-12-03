<form method="POST" action="{{ route('slider.store') }}">
    @csrf
    <div class="form-group">
        <label>Create new slider:</label>
        <input required name="name" type="text" class="form-control" placeholder="Slider name">
    </div>
    <button type="submit" class="btn btn-success">Create</button>
</form>