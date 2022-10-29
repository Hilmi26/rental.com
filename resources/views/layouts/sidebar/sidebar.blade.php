<div class="sidebar" data-color="orange">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            {{ __('RM') }}
        </a>
        <a href="#" class="simple-text logo-normal">
            {{ __('Rental Mobil') }}
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="@if ($activePage == 'home') active @endif">
                <a href="{{ route('home') }}">
                    <i class="now-ui-icons design_app"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'profile') active @endif">
                <a href="{{ route('profile.edit') }}">
                    <i class="now-ui-icons users_single-02"></i>
                    <p> {{ __("User Profile") }} </p>
                </a>
            </li>
            <li class="@if ($activePage == 'users') active @endif">
                <a href="{{ route('page.index','usermanagemen') }}">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p> {{ __("User Management") }} </p>
                </a>
            </li>
            <li class="@if ($activePage == 'maps') active @endif">
                <a href="{{ route('page.index','maps') }}">
                    <i class="now-ui-icons location_map-big"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
