@extends('website.index')
@section('content')
    <!--პირველი სექცია-->
    <section class="first-section">
        <div class="container-lg first-section-container">
            <p>{{ __('public._slider_text') }}</p>
            <a href="about-us.html"><button>{{ __('public._see_more') }}</button></a>
        </div>
    </section>
    <!--მეორე სექცია-->
    <section>
        <div class="container about-us">
            <div>
                <h3>{{ __('public._about') }}</h3>
                <p>
                    @if (session('locale') == 'en')
                        {!! $company->about_text_en !!}
                    @else
                        {!! $company->about_text_ge !!}
                    @endif
                </p>
                <a href="about-us.html"><button class="about-button">{{ __('public._see_more') }}</button></a>
            </div>
        </div>
    </section>
    <!--ღვინოების სექცია-->
    <section class="container wines-section">
        <h3>{{ __('public._wines') }}</h3>
        <div class="container">
            <div class="row">
                <div class="swiper productSwiper">
                    <div class="swiper-wrapper">
                        @foreach ($wines as $wine)
                            <div class="swiper-slide d-flex">
                                <div class="mb-3 card wine-card">
                                    <div class="row g-0">
                                        <div class="col-12 col-md-6 col-lg-5">
                                            <img src="/assets/image/{{ $wine->image }}" class="img-fluid rounded-start"
                                                alt="">
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-7">
                                            <div class="card-body wine-card-body">
                                                <h3 class="card-title">
                                                    @if (session('locale') == 'en')
                                                        {{ $wine->name_en }}
                                                    @else
                                                        {{ $wine->name_ge }}
                                                    @endif
                                                </h3>
                                                <p>{{ $wine->years }}</p>
                                                <div class="fade_rule"></div>
                                                <div class="mt-2 d-flex">
                                                    <p>{{ $wine->color }}</p>
                                                    <div class="mx-2 vl"></div>
                                                    <p>{{ $wine->type }}</p>
                                                </div>
                                                <p class="card-text">{{ $wine->description_ge }}
                                                    @if (session('locale') == 'en')
                                                        {!! $wine->description_en !!}
                                                    @else
                                                        {!! $wine->description_ge !!}
                                                    @endif
                                                </p>
                                                <a href="{{ route('website.index.wines') }}"><button
                                                        class="about-button">{{ __('public._see_more') }}</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    {{-- <div class="swiper-button-prev"></div> --}}
                </div>

            </div>
        </div>
    </section>
    <!--ნიუს სექცია-->
    <section class="container news-section">
        <h3>{{ __('public._news') }}</h3>
        <div class="container">
            <div class="row">
                <div class="swiper newsSwiper">
                    <div class="swiper-wrapper">
                        @foreach ($news as $new)
                            <div class="swiper-slide">
                                <a href="{{ route('website.show.news', $new->id) }}">
                                    <div class="news-section-img-wrapper">
                                        <img src="/assets/image/{{ $new->image }}" alt="">
                                        <div class="news-section-img-text">
                                            <p>
                                                @if (session('locale') == 'en')
                                                    {{ $new->name_en }}
                                                @else
                                                    {{ $new->name_ge }}
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <button class="news-section-about-button">{{ __('public._discovere_more') }}</button>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".productSwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".newsSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                440: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
        });
    </script>
@stop
