<ul id="slider-images" class="list-group">
    @foreach($sliderImages as $image)
        <li class="list-group-item">
            <img class="img-thumbnail slider-thumbnail" src="{{ asset('storage/slider_images/' . $image->image) }}">
            <span><i class="material-icons delete slider-image">delete</i></span>
            <span><i class="material-icons link">link</i></span>
        </li>
    @endforeach
</ul>
