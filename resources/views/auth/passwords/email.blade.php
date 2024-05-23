<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @component('layouts.partials.html_header')
        @section('html_header_title', __('login-recover.recover_password.title'))
    @endcomponent
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-primary">
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

                    <p class="login-box-msg">{{ __('login-recover.recover_password.title') }}</p>

                    <form action="{{ route('password.email') }}" method="POST">
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

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('login-recover.recover_password.action_button') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="mt-3 mb-0 text-center">
                        <a href="{{ route('login') }}">
                            {{ __('login-recover.login.title') }}
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
