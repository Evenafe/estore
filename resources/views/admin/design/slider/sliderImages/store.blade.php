<form enctype="multipart/form-data" id="form-product" method="POST" action="{{ route('sliderImages.store') }}">
    @csrf
    <input type="hidden" name="slider_id" value="{{ $slider->id }}">
    <div class="form-group">
        <label>Upload image to slider</label>
        <input required id="image" name="image" type="file" class="form-control-file">
    </div>

    <button type="submit" class="btn btn-lg btn-success">Add image</button>
</form>