<!DOCTYPE html>
<html lang="en">

@include('front-theme.partials.head')


<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <x-spinner>Loading...</x-spinner>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            @include('front-theme.partials.navbar')

            @yield('hero-type')
        </div>
        <!-- Navbar & Hero End -->

        @yield('content')


        <!-- Footer Start -->
        @include('front-theme.partials.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('front-theme.partials.scripts')



</body>

</html>
