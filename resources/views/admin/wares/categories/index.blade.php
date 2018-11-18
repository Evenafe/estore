@extends('admin.wares.index')

@section('wares-content')
    <h1>Categories</h1>

    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <div class="form-group">
            <label>Create new category:</label>
            <input name="name" type="text" class="form-control" placeholder="Category name">
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>

    <div class="list-group" id="category-list">
        @foreach($categories as $category)
            <a href="{{ route('categories.show', $category->id) }}" class="list-group-item list-group-item-action">{{ $category->name }}</a>
        @endforeach
    </div>
@endsection