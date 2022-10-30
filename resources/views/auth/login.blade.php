@extends('layouts.app', [
'namePage' => 'Login page',
'class' => 'login-page sidebar-mini ',
'activePage' => 'login',
'backgroundImage' => asset('sb') . "/images/bg14.jpg",
])

@section('content')
<div class="content">
    <div class="container">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="header bg-gradient-primary py-10 py-lg-2 pt-lg-12">
                <div class="container">
                    <div class="header-body text-center mb-7">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-9">
                                <p class="text-lead text-light mt-3 mb-0">
                                    @include('alerts.migrations_check')
                                </p>
                            </div>
                            <div class="col-lg-5 col-md-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ml-auto mr-auto">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card card-login card-plain">
                    <div class="card-header">
                        <div class="logo-container">
                            <img src="{{ asset('sb/img/now-logo.png') }}" alt="">
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="input-group no-border form-control-lg {{ $errors->has('username') ? ' has-danger' : '' }}">
                            <span class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </div>
                            </span>
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="{{ __('username') }}" name="username" value="{{ old('username') }}" required autocomplete="email" autofocus>
                        </div>
                        @if ($errors->has('username'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                        @endif
                        <div class="input-group no-border form-control-lg {{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="now-ui-icons objects_key-25"></i></i>
                                </div>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" name="password" required autocomplete="current-password">
                        </div>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        <div class="form-check text-right form-check-inline">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="card-footer ">
                        <button type="submit" class="btn btn-primary btn-round btn-lg btn-block mb-3">{{ __('Submit') }}</button>
                        <div class="pull-left">
                            <h6>
                                <a href="{{ route('register') }}" class="link footer-link">{{ __('Create Account') }}</a>
                            </h6>
                        </div>
                        <div class="pull-right">
                            <h6>
                                <a href="{{ route('password.request') }}" class="link footer-link">{{ __('Forgot Password?') }}</a>
                            </h6>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();
    });

</script>
@endpush
