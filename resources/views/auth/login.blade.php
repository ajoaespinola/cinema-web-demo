<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @component('layouts.partials.html_header')
        @section('html_header_title', __('login-recover.login.title'))
    @endcomponent
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-navy">
                {{--Header--}}
                <div class="card-header text-center">
                    {{--App Name--}}
                    <a href="{{ route("home") }}" class="h1">
                        <b>{{ \Str::upper(__('app.short_name')) }}</b>
                    </a>
                </div>
                {{--Form--}}
                <div class="card-body">
                    @include('layouts.partials.alerts')

                    <p class="login-box-msg">{{ __('login-recover.login.title') }}</p>

                    <form action="{{ route('login') }}" method="post" novalidate>
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="{{ __('login-recover.email') }}" value="{{ old('email') }}" autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="{{ __('login-recover.password') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">
                                        {{ __('login-recover.remember_password.action_button') }}
                                    </label>
                                </div>
                            </div>

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('login-recover.login.action_button') }}
                                </button>
                            </div>

                        </div>
                    </form>

                    <p class="mb-1">
                        <a href="{{ route('password.request') }}">
                            {{ __('login-recover.login.forgot_password_link') }}
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
