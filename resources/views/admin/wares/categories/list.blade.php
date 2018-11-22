<ul class="list-group" id="category-list">
    @foreach ($categories as $category)
        @if (!$category->category_id)
            <li id="{{ $category->id }}" class="list-group-item">
                <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                <i class="material-icons delete category">delete</i>
                <i class="material-icons toggle category">{{ $category->active ? 'check' : 'close'}}</i>
            </li>
        @endif
    @endforeach
</ul>