@extends('website.index')
@section('content')
    <div class="about-us-wrapper">
        <div class="container about-us-section">
            <h3>{{ __('public._about') }}</h3>
            <p class="first-section-first-p">
                @if (session('locale') == 'en')
                    {!! $company->about_text_en !!}
                @else
                    {!! $company->about_text_ge !!}
                @endif
            </p>
            <div class="image-div">
                <img class="about-img" src="https://businessformula.ge/uploads_script/articles/2023/08/27/86etk8mqvvgqwnd.jpg"
                    alt="">
            </div>
        </div>
    </div>
    <div class="about-us-wrapper-2">
        <div class="container about-us-section-2">
            <h3>{{ __('public._about_company') }}</h3>
            <p class="first-section-second-p">
                @if (session('locale') == 'en')
                    {!! $company->company_text_en !!}
                @else
                    {!! $company->company_text_ge !!}
                @endif
            </p>
        </div>
    </div>
@stop
