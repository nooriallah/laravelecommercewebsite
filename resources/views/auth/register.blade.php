{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <title>Corona Admin</title>--}}
{{--    <!-- plugins:css -->--}}
{{--    <link rel="stylesheet" href="/backend/assets/vendors/mdi/css/materialdesignicons.min.css">--}}
{{--    <link rel="stylesheet" href="/backend/assets/vendors/css/vendor.bundle.base.css">--}}
{{--    <!-- endinject -->--}}
{{--    <!-- Plugin css for this page -->--}}
{{--    <!-- End plugin css for this page -->--}}
{{--    <!-- inject:css -->--}}
{{--    <!-- endinject -->--}}
{{--    <!-- Layout styles -->--}}
{{--    <link rel="stylesheet" href="/backend/assets/css/style.css">--}}
{{--    <!-- End layout styles -->--}}
{{--    <link rel="shortcut icon" href="/backend/assets/images/favicon.png"/>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container-scroller">--}}
{{--    <div class="container-fluid page-body-wrapper full-page-wrapper">--}}
{{--        <div class="row w-100 m-0">--}}
{{--            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">--}}
{{--                <div class="card col-lg-4 mx-auto">--}}
{{--                    <div class="card-body px-5 py-5">--}}
{{--                        <h3 class="card-title text-left mb-3">Register</h3>--}}
{{--                        <form method="POST" action="{{ route('register') }}">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Name</label>--}}
{{--                                <input type="text" class="form-control p_input" type="text" name="name"--}}
{{--                                       :value="old('name')" required autofocus autocomplete="name">--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label>Email</label>--}}
{{--                                <input type="email" class="form-control p_input" name="email" :value="old('email')"--}}
{{--                                       required autocomplete="email">--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label>Phone</label>--}}
{{--                                <input type="tel" class="form-control p_input" name="phone" :value="old('phone')"--}}
{{--                                       required autocomplete="phone">--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label>Address</label>--}}
{{--                                <textarea class="w-100 form-control" style="height: 100px" name="address"--}}
{{--                                          :value="old('address')" required autocomplete="address"></textarea>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label>Password</label>--}}
{{--                                <input type="password" class="form-control p_input" name="password" required--}}
{{--                                       autocomplete="new-password">--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label>Confirm Password</label>--}}
{{--                                <input type="password" class="form-control p_input" name="password_confirmation"--}}
{{--                                       required autocomplete="new-password">--}}
{{--                            </div>--}}

{{--                            <div class="form-group d-flex align-items-center justify-content-between">--}}
{{--                                <div class="form-check">--}}
{{--                                    <label class="form-check-label">--}}
{{--                                        <input type="checkbox" class="form-check-input"> Remember me </label>--}}
{{--                                </div>--}}
{{--                                <a href="#" class="forgot-pass">Forgot password</a>--}}
{{--                            </div>--}}

{{--                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
{{--                                <div class="mt-4">--}}
{{--                                    <x-label for="terms">--}}
{{--                                        <div class="flex items-center">--}}
{{--                                            <x-checkbox name="terms" id="terms" required/>--}}

{{--                                            <div class="ms-2">--}}
{{--                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [--}}
{{--                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',--}}
{{--                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',--}}
{{--                                                ]) !!}--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </x-label>--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                            <div class="text-center">--}}
{{--                                <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex">--}}
{{--                                <button class="btn btn-facebook col me-2">--}}
{{--                                    <i class="mdi mdi-facebook"></i> Facebook--}}
{{--                                </button>--}}
{{--                                <button class="btn btn-google col">--}}
{{--                                    <i class="mdi mdi-google-plus"></i> Google plus--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <p class="sign-up text-center">Already have an Account?<a href="#"> Sign Up</a></p>--}}
{{--                            <p class="terms">By creating an account you are accepting our<a href="#"> Terms &--}}
{{--                                    Conditions</a></p>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- content-wrapper ends -->--}}
{{--        </div>--}}
{{--        <!-- row ends -->--}}
{{--    </div>--}}
{{--    <!-- page-body-wrapper ends -->--}}
{{--</div>--}}
{{--<!-- container-scroller -->--}}
{{--<!-- plugins:js -->--}}
{{--<script src="/backend/assets/vendors/js/vendor.bundle.base.js"></script>--}}
{{--<!-- endinject -->--}}
{{--<!-- Plugin js for this page -->--}}
{{--<!-- End plugin js for this page -->--}}
{{--<!-- inject:js -->--}}
{{--<script src="/backend/assets/js/off-canvas.js"></script>--}}
{{--<script src="/backend/assets/js/hoverable-collapse.js"></script>--}}
{{--<script src="/backend/assets/js/misc.js"></script>--}}
{{--<script src="/backend/assets/js/settings.js"></script>--}}
{{--<script src="/backend/assets/js/todolist.js"></script>--}}
{{--<!-- endinject -->--}}
{{--</body>--}}
{{--</html>--}}


<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="address" value="{{ __('Address') }}" />
                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
