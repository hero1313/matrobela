<nav class="container">
    <!--ხილვადი მენიუ-->
    <div class="row header-menu-visible">
        <a class="col d-flex justify-content-center align-items-center nav-hover-effect" href="{{ route('website.index.main') }}"><div >{{ __('public._home') }}</div></a>
        <a class="col d-flex justify-content-center align-items-center nav-hover-effect" href="{{ route('website.index.about') }}"><div >{{ __('public._about') }}</div></a>
        <a class="col d-flex justify-content-center align-items-center nav-hover-effect" href="{{ route('website.index.wines') }}"><div >{{ __('public._wines') }}</div></a>
        <a class="col d-flex justify-content-center align-items-center" href="/"><div ><img class="logo" src="/assets/website/image/logo/მათრობელა ლოგო.png" alt="logo"></div></a>
        <a class="col d-flex justify-content-center align-items-center nav-hover-effect" href="{{ route('website.index.gallery') }}"><div >{{ __('public._gallery') }}</div></a>
        <a class="col d-flex justify-content-center align-items-center nav-hover-effect" href="news.html"><div >{{ __('public._news') }}</div></a>
        <a class="col d-flex justify-content-center align-items-center nav-hover-effect" href="/"><div >{{ __('public._contact') }}</div></a>
        @if (session('locale') == 'en')
            <a class="col d-flex justify-right align-items-center" href="/locale/ge"><div ><i class="fa-solid fa-globe"></i></div></a>
        @else
            <a class="col d-flex justify-right align-items-center" href="/locale/en"><div ><i class="fa-solid fa-globe"></i></div></a>
        @endif
    </div>
    <!--დაფარული მენიუ-->
    <div class="row header-menu-hidden">
        <div class="col-4 d-flex justify-content-center align-items-center">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars"></i></button>
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body hidden-menu-items">
                <a href="{{ route('website.index.main') }}"><div class="pt-3 my-3 ">{{ __('public._home') }}</div></a>
                <a href="{{ route('website.index.about') }}"><div class="pt-3 my-3 ">{{ __('public._about') }}</div></a>
                <a href="{{ route('website.index.wines') }}"><div class="pt-3 my-3 ">{{ __('public._wines') }}</div></a>
                <a href="{{ route('website.index.gallery') }}"><div class="pt-3 my-3 ">{{ __('public._gallery') }}</div></a>
                <a href="news.html"><div class="pt-3 my-3 ">{{ __('public._news') }}</div></a>
                <a href="/"><div class="pt-3 my-3 ">{{ __('public._contact') }}</div></a>
            </div>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-center align-items-center"><a href="/"><img class="logo" src="/assets/website/image/logo/მათრობელა ლოგო.png" alt="logo"></a></div>
        @if (session('locale') == 'en')
            <div class="col-4 d-flex justify-content-center align-items-center"><a href="/locale/ge"><i class="fa-solid fa-globe"></i></a></div>
        @else
            <div class="col-4 d-flex justify-content-center align-items-center"><a href="/locale/en"><i class="fa-solid fa-globe"></i></a></div>
        @endif

    </div>
</nav>