<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>

</style>
</head>
<body>

<div class="row">
    <div class="col-md-6">
    <h1>Please Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                <label for="name" >{{ __('Name') }}</label><br/>
                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div></div>

                <div class="row">
                <div class="col-md-6">
                <label for="email" >{{ __('Email') }}</label><br/>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                </div></div>

                <div class="row">
                <div class="col-md-6">
                <label for="password" >{{ __('Password') }}</label><br/>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                </div></div>

                <div class="row">
                <div class="col-md-6">
                <label for="password_confirmation" >{{ __('Password Confirmation') }}</label><br/>
                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div></div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <label for="terms">

                            <input type="checkbox" name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}

                    </label>
            @endif

                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button class="d-flex btn btn-primary">
                    {{ __('Register') }}
                </button>

        </form>
    </div></div>
</body>
