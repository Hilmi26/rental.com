
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@include('layouts.sidebar.sidebar')
<div class="main-panel">
    @include('layouts.navbar.auth')
    @yield('content')
    @include('layouts.footer.footer')
</div>