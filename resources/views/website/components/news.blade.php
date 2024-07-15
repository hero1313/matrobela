@extends('website.index')
@section('content')
    <div class="container">
        <h1 class="my-5">{{ __('public._news') }}</h1>
        <div class="container pl-0">
            <h5>
                @if (session('locale') == 'en')
                {{ $news->name_ge}}
                @else
                {{ $news->name_en}}
                @endif
            </h5>
            <div class="my-5 row">
                <div class="col-12 col-md-5 col-lg-4 col-xl-4 news-verticall-pic">
                    <img src="/assets/image/{{ $news->image }}" alt="">
                </div>
                <div class="news-text col-12 col-md-7 col-lg-8 col-xl-8">
                    @if (session('locale') == 'en')
                        {!! $news->text_en !!}
                    @else
                        {!! $news->text_ge !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop
