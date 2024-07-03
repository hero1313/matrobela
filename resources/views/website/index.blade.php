<!DOCTYPE html>
<html lang="en">

@include('website.layouts.head')

<body>
    @include('website.layouts.header')
    
    @yield('content')

    <!--footer-->
    @include('website.layouts.footer')

</body>
</html>
