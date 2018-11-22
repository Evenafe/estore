<form id="form-product" method="POST" action="{{ route('products.store') }}">
    @csrf
    <input type="hidden" name="category_id" value="{{ $category->id }}">

    <h2>Product information</h2>

    <div class="form-group">
        <label>Title:</label>
        <input name="name" type="text" class="form-control" placeholder="Product name">
    </div>

    <div class="form-group">
        <label>Ingress:</label>
        <textarea name="ingress" placeholder="Short description" class="form-control" rows="2"></textarea>
    </div>

    <div class="form-group">
        <label>Description:</label>
        <textarea name="description" placeholder="Descriptive information about the product" class="form-control" rows="5"></textarea>
    </div>

    <h2>Price</h2>

    <div class="form-group">
        <label>Price incl. VAT:</label>
        <input value="0" name="price" min="0" type="number" placeholder="0,00">
    </div>

    <div class="form-group">
        <label>VAT rate:</label>
        <select name="tax_rate" class="form-control">
            <option selected value="25">25%</option>
            <option value="15">15%</option>
            <option value="10">10%</option>
        </select>
    </div>

    <h2>Stock</h2>

    <div class="form-group">
        <label>Stock:</label>
        <input value="0" name="stock" min="0" type="number" placeholder="0">
    </div>


    <button type="submit" class="btn btn-lg btn-success">Create</button>
</form>