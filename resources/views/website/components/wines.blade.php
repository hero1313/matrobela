@extends('website.index')
@section('content')
    <div class="background-image"></div>
    <div class="wines-wrapper">
        <section class="container wines-section">
            <h1>{{ __('public._wines') }}</h1>
            <div class="container">
                <div class="row">
                    @foreach ($wines as $wine)
                    <div class="col-12">
                        <div class="mb-3 card wine-card">
                            <div class="row g-0">
                                <div class="col-12 col-md-6 col-lg-5">
                                    <img src="/assets/image/{{ $wine->image }}" class="rounded img-fluid" alt="">
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
                                        <p class="card-text">
                                            @if (session('locale') == 'en')
                                                {{ $wine->description_ge }}
                                            @else
                                                {{ $wine->description_en }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@stop
