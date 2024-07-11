
    @extends('website.index')
    @section('content')
    <div class="container gallery-wrapper">
        <h1>{{ __('public._gallery') }}</h1>
        <div class="container">
            <div class="row">
                @foreach ($galleries as $gallery)
                    <div class="my-4 col-6 col-lg-3 col-md-6">
                        <div class="gallery-img"><img src="/assets/image/{{ $gallery->image }}" alt=""></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @stop
    