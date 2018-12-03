<ul class="list-group wares-list" id="category-list">
    @foreach ($categories as $category)
        @if (!$category->category_id)
            <li id="{{ $category->id }}" class="list-group-item">
                <meta name="ware" content="categories">
                <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                <i class="material-icons delete category">delete</i>
                <i class="material-icons toggle category">{{ $category->active ? 'check' : 'close'}}</i>
                <i class="material-icons edit category">edit</i>
                <span class="category-product-amount">Products: {{ count($category->products) }}</span>
                <form method="POST" action="{{ route('categories.update', $category->id) }}" class="hidden">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="name" value="{{ $category->name }}">
                </form>
            </li>
        @endif
    @endforeach
</ul>