@extends('admin.design.index')

@section('design-content')
    <h2 class="ware-title">Slider: <span class="category-title">{{ $slider->name }}</span></h2>

    @include('admin.design.slider.sliderImages.store')
    @include('admin.design.slider.sliderImages.list', compact('sliderImages'))
@endsection