<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


{{--    <!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">--}}
{{--    <title>Login Page</title>--}}

{{--    <!-- General CSS Files -->--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/Dashboard/modules/bootstrap/css/bootstrap.min.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/Dashboard/modules/fontawesome/css/all.min.css') }}">--}}

{{--    <!-- CSS Libraries -->--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/Dashboard/modules/bootstrap-social/bootstrap-social.css') }}">--}}

{{--    <!-- Template CSS -->--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/Dashboard/css/style.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/Dashboard/css/components.css') }}">--}}
{{--    <!-- Start GA -->--}}
{{--    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>--}}
{{--    <script>--}}
{{--        window.dataLayer = window.dataLayer || [];--}}

{{--        function gtag() {--}}
{{--            dataLayer.push(arguments);--}}
{{--        }--}}

{{--        gtag('js', new Date());--}}

{{--        gtag('config', 'UA-94034622-3');--}}
{{--    </script>--}}
{{--</head>--}}

{{--<body>--}}
{{--<div id="app">--}}
{{--    <section class="section">--}}
{{--        <div class="container mt-5">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">--}}
{{--                    <div class="login-brand">--}}
{{--                        <img src="{{ asset('assets/Dashboard/img/stisla-fill.svg') }}" alt="logo"--}}
{{--                             width="100" class="shadow-light rounded-circle">--}}
{{--                    </div>--}}

{{--                    <div class="card card-primary">--}}

{{--                        <div class="card-header">--}}
{{--                            <h4>Register Page</h4>--}}
{{--                        </div>--}}

{{--                        <div class="card-body">--}}
{{--                            <form method="POST" action="{{ route('register') }}" class="needs-validation"--}}
{{--                                  novalidate="">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="email">Email</label>--}}
{{--                                    <input id="email" type="email" class="form-control" name="email"--}}
{{--                                           tabindex="1" required autofocus>--}}
{{--                                    <div class="invalid-feedback">--}}
{{--                                        Please fill in your email--}}
{{--                                    </div>--}}
{{--                                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="email">Password</label>--}}
{{--                                    <input id="email" type="password" class="form-control" name="password"--}}
{{--                                           tabindex="1" required>--}}
{{--                                    <div class="invalid-feedback">--}}
{{--                                        Please fill in your password--}}
{{--                                    </div>--}}
{{--                                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>--}}
{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <div class="custom-control custom-checkbox">--}}
{{--                                        <input type="checkbox" name="remember" class="custom-control-input"--}}
{{--                                               tabindex="3" id="remember-me">--}}
{{--                                        <label class="custom-control-label" for="remember-me">Remember Me</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                                <div class="form-group">--}}
{{--                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">--}}
{{--                                        Login--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </form>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="simple-footer">--}}
{{--                        Copyright &copy; <a target="_blank" href="https://wa.me/+201212484233">Abdallh Elzayat</a>--}}
{{--                        2025--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--</div>--}}

{{--<!-- General JS Scripts -->--}}
{{--<script src="{{ asset('assets/Dashboard/modules/jquery.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/Dashboard/modules/popper.js') }}"></script>--}}
{{--<script src="{{ asset('assets/Dashboard/modules/tooltip.js') }}"></script>--}}
{{--<script src="{{ asset('assets/Dashboard/modules/bootstrap/js/bootstrap.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/Dashboard/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/Dashboard/modules/moment.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/Dashboard/js/stisla.js') }}"></script>--}}

{{--<!-- JS Libraies -->--}}

{{--<!-- Page Specific JS File -->--}}

{{--<!-- Template JS File -->--}}
{{--<script src="{{ asset('assets/Dashboard/js/scripts.js') }}"></script>--}}
{{--<script src="{{ asset('assets/Dashboard/js/custom.js') }}"></script>--}}
{{--</body>--}}

{{--</html>--}}
