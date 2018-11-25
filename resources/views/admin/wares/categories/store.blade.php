<form method="POST" action="{{ route('categories.store') }}">
    @csrf
    <div class="form-group">
        <label>Create new category:</label>
        <input required name="name" type="text" class="form-control" placeholder="Category name">
    </div>
    <button type="submit" class="btn btn-success">Create</button>
</form>