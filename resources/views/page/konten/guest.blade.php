<div class="wrapper wrapper-full-page ">
    @include('layouts.navbar.guest')
    <div class="full-page register-page section-image" filter-color="black" data-image="{{ $backgroundImage }}">
        @yield('content')
        @include('layouts.footer.footer')
    </div>
</div>
