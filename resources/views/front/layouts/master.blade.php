@include('front.layouts.head')

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            @include('front.layouts.navbar')
            @yield('header')

        </div>
        <!-- Navbar & Hero End -->
        @yield('content')
@include('front.layouts.footer')
