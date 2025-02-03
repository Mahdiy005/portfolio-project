<!doctype html>
<html lang="en">

@include('dashboard-theme.partials.head')


<body class="vertical  light  ">
    <div class="wrapper">
        @include('dashboard-theme.partials.navbar')
        @include('dashboard-theme.partials.aside')

        <main role="main" class="main-content">
            @yield('main')
        </main> <!-- main -->
    </div> <!-- .wrapper -->
    @include('dashboard-theme.partials.scripts')
</body>

</html>
