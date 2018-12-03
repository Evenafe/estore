<ul class="list-group slider-list" id="slider-list">
    @foreach ($sliders as $slider)
        <li id="{{ $slider->id }}" class="list-group-item">
            <meta name="sliders" content="slider">
            <a href="{{ route('slider.show', $slider->id) }}">{{ $slider->name }}</a>
            <i class="material-icons delete slider">delete</i>
            <i class="material-icons toggle slider">{{ $slider->active ? 'check' : 'close'}}</i>
            <i class="material-icons edit slider">edit</i>
            <form method="POST" action="{{ route('slider.update', $slider->id) }}" class="hidden">
                @csrf
                @method('PATCH')
                <input type="text" name="name" value="{{ $slider->name }}">
            </form>
        </li>
    @endforeach
</ul>