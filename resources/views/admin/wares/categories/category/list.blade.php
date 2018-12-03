<ul class="list-group wares-list" id="product-list">
    @foreach ($products as $product)
            <li id="{{ $product->id }}" class="list-group-item">
                <img
                        class="product-thumbnail"
                        src="{{ asset('storage/product_images/' . $product->image) }}"
                        alt="{{ $product->name }}">
                <a href="{{ route('products.edit', $product->id) }}">{{ $product->name }}</a>
                <meta name="ware" content="products">
                <i class="material-icons delete product">delete</i>
                <i class="material-icons toggle product">{{ $category->active ? 'check' : 'close'}}</i>
            </li>
    @endforeach
</ul>