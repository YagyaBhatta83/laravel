<!DOCTYPE html>
<html lang="en">

@include('front.layouts.head')

<body>
    @include('front.layouts.navbar')
    @yield('page_heading')

    @yield('contents')

    @include('front.layouts.footer')

</body>

</html>